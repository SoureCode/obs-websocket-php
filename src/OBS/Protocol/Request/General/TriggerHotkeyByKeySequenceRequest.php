<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 * Triggers a hotkey using a sequence of keys.
 *
 * Note: Hotkey functionality in obs-websocket comes as-is, and we do not guarantee support if things are broken. In 9/10 usages of hotkey requests, there exists a better, more reliable method via other requests.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category general
 */
final readonly class TriggerHotkeyByKeySequenceRequest implements RequestInterface
{
    /**
     * The OBS key ID to use. See https://github.com/obsproject/obs-studio/blob/master/libobs/obs-hotkeys.h
     *
     * @var ?string
     */
    public ?string $keyId;
    /**
     * Object containing key modifiers to apply
     *
     * @var ?array
     */
    public ?array $keyModifiers;
    /**
     * Press Shift
     *
     * @var ?bool
     */
    #[SerializedName('keyModifiers.shift')]
    public ?bool $keyModifiersShift;
    /**
     * Press CTRL
     *
     * @var ?bool
     */
    #[SerializedName('keyModifiers.control')]
    public ?bool $keyModifiersControl;
    /**
     * Press ALT
     *
     * @var ?bool
     */
    #[SerializedName('keyModifiers.alt')]
    public ?bool $keyModifiersAlt;
    /**
     * Press CMD (Mac)
     *
     * @var ?bool
     */
    #[SerializedName('keyModifiers.command')]
    public ?bool $keyModifiersCommand;
    public function __construct(?string $keyId = null, ?array $keyModifiers = null, ?bool $keyModifiersShift = null, ?bool $keyModifiersControl = null, ?bool $keyModifiersAlt = null, ?bool $keyModifiersCommand = null)
    {
        $this->keyId = $keyId;
        $this->keyModifiers = $keyModifiers;
        $this->keyModifiersShift = $keyModifiersShift;
        $this->keyModifiersControl = $keyModifiersControl;
        $this->keyModifiersAlt = $keyModifiersAlt;
        $this->keyModifiersCommand = $keyModifiersCommand;
    }
}
