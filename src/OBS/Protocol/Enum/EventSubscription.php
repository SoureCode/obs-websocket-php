<?php

namespace SoureCode\OBS\Protocol\Enum;

enum EventSubscription: int
{
    /**
     * Subcription value used to disable all events.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case None = 0;
    /**
     * Subscription value to receive events in the `General` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case General = 1;
    /**
     * Subscription value to receive events in the `Config` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Config = 2;
    /**
     * Subscription value to receive events in the `Scenes` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Scenes = 4;
    /**
     * Subscription value to receive events in the `Inputs` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Inputs = 8;
    /**
     * Subscription value to receive events in the `Transitions` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Transitions = 16;
    /**
     * Subscription value to receive events in the `Filters` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Filters = 32;
    /**
     * Subscription value to receive events in the `Outputs` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Outputs = 64;
    /**
     * Subscription value to receive events in the `SceneItems` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case SceneItems = 128;
    /**
     * Subscription value to receive events in the `MediaInputs` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case MediaInputs = 256;
    /**
     * Subscription value to receive the `VendorEvent` event.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Vendors = 512;
    /**
     * Subscription value to receive events in the `Ui` category.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case Ui = 1024;
    /**
     * Helper to receive all non-high-volume events.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case All = self::General->value | self::Config->value | self::Scenes->value | self::Inputs->value | self::Transitions->value | self::Filters->value | self::Outputs->value | self::SceneItems->value | self::MediaInputs->value | self::Vendors->value | self::Ui->value;
    /**
     * Subscription value to receive the `InputVolumeMeters` high-volume event.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InputVolumeMeters = 65536;
    /**
     * Subscription value to receive the `InputActiveStateChanged` high-volume event.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InputActiveStateChanged = 131072;
    /**
     * Subscription value to receive the `InputShowStateChanged` high-volume event.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case InputShowStateChanged = 262144;
    /**
     * Subscription value to receive the `SceneItemTransformChanged` high-volume event.
     *
     * @since 5.0.0
     * @rpcVersion 1
     */
    case SceneItemTransformChanged = 524288;
}
