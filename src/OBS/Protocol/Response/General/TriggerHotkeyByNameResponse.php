<?php

namespace SoureCode\OBS\Protocol\Response\General;

use SoureCode\OBS\Protocol\ResponseInterface;

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
final readonly class TriggerHotkeyByNameResponse implements ResponseInterface
{
    public function __construct()
    {
    }
}
