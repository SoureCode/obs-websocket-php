<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

function filesystem(): Filesystem
{
    static $filesystem;

    if ($filesystem === null) {
        $filesystem = new Filesystem();
    }

    return $filesystem;
}

function php(): string
{
    static $php;

    if ($php === null) {
        $binary = new PhpExecutableFinder();
        $result = $binary->find();

        if ($result === false) {
            throw new \RuntimeException('Unable to find PHP binary.');
        }

        $php = $result;
    }

    return $php;
}

/**
 * @param string ...$paths
 * @return string
 */
function directory(...$paths): string
{
    return Path::join(projectDirectory(), ...$paths);
}

function projectDirectory(): string
{
    global $projectDirectory;

    return $projectDirectory;
}

function toolDirectory(): string
{
    global $toolsDirectory;

    return $toolsDirectory;
}

enum Tool: string
{
    case PHP_CS_FIXER = 'https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/releases/download/v3.57.1/php-cs-fixer.phar';
    case PHP_DOCUMENTOR = 'https://github.com/phpDocumentor/phpDocumentor/releases/download/v3.4.3/phpDocumentor.phar';
    case PHP_STAN = 'https://github.com/phpstan/phpstan/releases/download/1.11.1/phpstan.phar';

    /**
     * @return Tool[]
     */
    public static function all(): array
    {
        return [
            self::PHP_CS_FIXER,
            self::PHP_DOCUMENTOR,
            self::PHP_STAN,
        ];
    }

    public function toolName(): string
    {
        return basename($this->value);
    }

    public function downloadTool(): string
    {
        $toolPath = Path::join(toolDirectory(), $this->toolName());

        $filesystem = filesystem();
        $filesystem->copy($this->value, $toolPath);
        $filesystem->chmod($toolPath, 0755);

        return $toolPath;
    }

    public function removeTool(): void
    {
        $toolDirectory = toolDirectory();
        $toolPath = Path::join($toolDirectory, $this->toolName());
        $filesystem = filesystem();

        if ($filesystem->exists($toolPath)) {
            $filesystem->remove($toolPath);
        }

        if (!(new \FilesystemIterator($toolDirectory))->valid()) {
            $filesystem->remove($toolDirectory);
        }
    }

    public function run(array $args, ?string $cwd = null, ?array $env = null, mixed $input = null, ?float $timeout = 60, ?bool $autoRemove = false): Process
    {
        $toolPath = Path::join(toolDirectory(), $this->toolName());

        if (!filesystem()->exists($toolPath)) {
            $this->downloadTool();
        }

        $arguments = [
            php(),
            $toolPath,
            ...$args,
        ];

        $process = new Process(
            $arguments,
            $cwd ?? projectDirectory(),
            $env ?? null,
            $input ?? null,
            $timeout ?? null,
        );

        $process->mustRun();

        if ($autoRemove) {
            $this->removeTool();
        }

        return $process;
    }
}

$filesystem = filesystem();
$projectDirectory = dirname(__DIR__);
$toolsDirectory = Path::join($projectDirectory, 'tools');

if (!$filesystem->exists($toolsDirectory)) {
    $filesystem->mkdir($toolsDirectory);
}
