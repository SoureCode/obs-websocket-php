<?php

namespace SoureCode\OBS\Protocol\Event\Ui;

use SoureCode\OBS\Protocol\EventInterface;
/**
 * A screenshot has been saved.
 * 
 * Note: Triggered for the screenshot feature available in `Settings -> Hotkeys -> Screenshot Output` ONLY.
 * Applications using `Get/SaveSourceScreenshot` should implement a `CustomEvent` if this kind of inter-client
 * communication is desired.
 *
 * @since 5.1.0
 * @rpcVersion 1
 * @complexity 2
 * @category ui
 */
final readonly class ScreenshotSavedEvent implements EventInterface
{
    /**
     * Path of the saved image file
     *
     * @since 5.1.0
     * @rpcVersion 1
     * @type string
     */
    public string $savedScreenshotPath;
    public function __construct(string $savedScreenshotPath)
    {
        $this->savedScreenshotPath = $savedScreenshotPath;
    }
}