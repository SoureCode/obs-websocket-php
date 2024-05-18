<?php

namespace SoureCode\OBS\Protocol\Request\General;

use SoureCode\OBS\Protocol\RequestInterface;
/**
 * Triggers a hotkey using its name. See `GetHotkeyList`.
 * 
 * Note: Hotkey functionality in obs-websocket comes as-is, and we do not guarantee support if things are broken. In 9/10 usages of hotkey requests, there exists a better, more reliable method via other requests.
 *
 * @since 5.0.0
 * @rpcVersion 1
 * @complexity 4
 * @category general
 */
final readonly class TriggerHotkeyByNameRequest implements RequestInterface
{
    /**
     * Name of the hotkey to trigger
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type string
     */
    public string $hotkeyName;
    /**
     * Name of context of the hotkey to trigger
     *
     * @since 5.0.0
     * @rpcVersion 1
     * @type ?string
     */
    public ?string $contextName;
    public function __construct(string $hotkeyName, ?string $contextName = null)
    {
        $this->hotkeyName = $hotkeyName;
        $this->contextName = $contextName;
    }
}