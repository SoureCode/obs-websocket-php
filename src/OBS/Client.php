<?php

namespace SoureCode\OBS;

use SoureCode\OBS\BaseClient;
use SoureCode\OBS\Protocol\Request\Config\GetPersistentDataRequest;
use SoureCode\OBS\Protocol\Response\Config\GetPersistentDataResponse;
use SoureCode\OBS\Protocol\Request\Config\SetPersistentDataRequest;
use SoureCode\OBS\Protocol\Response\Config\SetPersistentDataResponse;
use SoureCode\OBS\Protocol\Request\Config\GetSceneCollectionListRequest;
use SoureCode\OBS\Protocol\Response\Config\GetSceneCollectionListResponse;
use SoureCode\OBS\Protocol\Request\Config\SetCurrentSceneCollectionRequest;
use SoureCode\OBS\Protocol\Response\Config\SetCurrentSceneCollectionResponse;
use SoureCode\OBS\Protocol\Request\Config\CreateSceneCollectionRequest;
use SoureCode\OBS\Protocol\Response\Config\CreateSceneCollectionResponse;
use SoureCode\OBS\Protocol\Request\Config\GetProfileListRequest;
use SoureCode\OBS\Protocol\Response\Config\GetProfileListResponse;
use SoureCode\OBS\Protocol\Request\Config\SetCurrentProfileRequest;
use SoureCode\OBS\Protocol\Response\Config\SetCurrentProfileResponse;
use SoureCode\OBS\Protocol\Request\Config\CreateProfileRequest;
use SoureCode\OBS\Protocol\Response\Config\CreateProfileResponse;
use SoureCode\OBS\Protocol\Request\Config\RemoveProfileRequest;
use SoureCode\OBS\Protocol\Response\Config\RemoveProfileResponse;
use SoureCode\OBS\Protocol\Request\Config\GetProfileParameterRequest;
use SoureCode\OBS\Protocol\Response\Config\GetProfileParameterResponse;
use SoureCode\OBS\Protocol\Request\Config\SetProfileParameterRequest;
use SoureCode\OBS\Protocol\Response\Config\SetProfileParameterResponse;
use SoureCode\OBS\Protocol\Request\Config\GetVideoSettingsRequest;
use SoureCode\OBS\Protocol\Response\Config\GetVideoSettingsResponse;
use SoureCode\OBS\Protocol\Request\Config\SetVideoSettingsRequest;
use SoureCode\OBS\Protocol\Response\Config\SetVideoSettingsResponse;
use SoureCode\OBS\Protocol\Request\Config\GetStreamServiceSettingsRequest;
use SoureCode\OBS\Protocol\Response\Config\GetStreamServiceSettingsResponse;
use SoureCode\OBS\Protocol\Request\Config\SetStreamServiceSettingsRequest;
use SoureCode\OBS\Protocol\Response\Config\SetStreamServiceSettingsResponse;
use SoureCode\OBS\Protocol\Request\Config\GetRecordDirectoryRequest;
use SoureCode\OBS\Protocol\Response\Config\GetRecordDirectoryResponse;
use SoureCode\OBS\Protocol\Request\Config\SetRecordDirectoryRequest;
use SoureCode\OBS\Protocol\Response\Config\SetRecordDirectoryResponse;
use SoureCode\OBS\Protocol\Request\Filters\GetSourceFilterKindListRequest;
use SoureCode\OBS\Protocol\Response\Filters\GetSourceFilterKindListResponse;
use SoureCode\OBS\Protocol\Request\Filters\GetSourceFilterListRequest;
use SoureCode\OBS\Protocol\Response\Filters\GetSourceFilterListResponse;
use SoureCode\OBS\Protocol\Request\Filters\GetSourceFilterDefaultSettingsRequest;
use SoureCode\OBS\Protocol\Response\Filters\GetSourceFilterDefaultSettingsResponse;
use SoureCode\OBS\Protocol\Request\Filters\CreateSourceFilterRequest;
use SoureCode\OBS\Protocol\Response\Filters\CreateSourceFilterResponse;
use SoureCode\OBS\Protocol\Request\Filters\RemoveSourceFilterRequest;
use SoureCode\OBS\Protocol\Response\Filters\RemoveSourceFilterResponse;
use SoureCode\OBS\Protocol\Request\Filters\SetSourceFilterNameRequest;
use SoureCode\OBS\Protocol\Response\Filters\SetSourceFilterNameResponse;
use SoureCode\OBS\Protocol\Request\Filters\GetSourceFilterRequest;
use SoureCode\OBS\Protocol\Response\Filters\GetSourceFilterResponse;
use SoureCode\OBS\Protocol\Request\Filters\SetSourceFilterIndexRequest;
use SoureCode\OBS\Protocol\Response\Filters\SetSourceFilterIndexResponse;
use SoureCode\OBS\Protocol\Request\Filters\SetSourceFilterSettingsRequest;
use SoureCode\OBS\Protocol\Response\Filters\SetSourceFilterSettingsResponse;
use SoureCode\OBS\Protocol\Request\Filters\SetSourceFilterEnabledRequest;
use SoureCode\OBS\Protocol\Response\Filters\SetSourceFilterEnabledResponse;
use SoureCode\OBS\Protocol\Request\General\GetVersionRequest;
use SoureCode\OBS\Protocol\Response\General\GetVersionResponse;
use SoureCode\OBS\Protocol\Request\General\GetStatsRequest;
use SoureCode\OBS\Protocol\Response\General\GetStatsResponse;
use SoureCode\OBS\Protocol\Request\General\BroadcastCustomEventRequest;
use SoureCode\OBS\Protocol\Response\General\BroadcastCustomEventResponse;
use SoureCode\OBS\Protocol\Request\General\CallVendorRequestRequest;
use SoureCode\OBS\Protocol\Response\General\CallVendorRequestResponse;
use SoureCode\OBS\Protocol\Request\General\GetHotkeyListRequest;
use SoureCode\OBS\Protocol\Response\General\GetHotkeyListResponse;
use SoureCode\OBS\Protocol\Request\General\TriggerHotkeyByNameRequest;
use SoureCode\OBS\Protocol\Response\General\TriggerHotkeyByNameResponse;
use SoureCode\OBS\Protocol\Request\General\TriggerHotkeyByKeySequenceRequest;
use SoureCode\OBS\Protocol\Response\General\TriggerHotkeyByKeySequenceResponse;
use SoureCode\OBS\Protocol\Request\General\SleepRequest;
use SoureCode\OBS\Protocol\Response\General\SleepResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputListRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputListResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputKindListRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputKindListResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetSpecialInputsRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetSpecialInputsResponse;
use SoureCode\OBS\Protocol\Request\Inputs\CreateInputRequest;
use SoureCode\OBS\Protocol\Response\Inputs\CreateInputResponse;
use SoureCode\OBS\Protocol\Request\Inputs\RemoveInputRequest;
use SoureCode\OBS\Protocol\Response\Inputs\RemoveInputResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputNameRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputNameResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputDefaultSettingsRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputDefaultSettingsResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputSettingsRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputSettingsResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputSettingsRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputSettingsResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputMuteRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputMuteResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputMuteRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputMuteResponse;
use SoureCode\OBS\Protocol\Request\Inputs\ToggleInputMuteRequest;
use SoureCode\OBS\Protocol\Response\Inputs\ToggleInputMuteResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputVolumeRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputVolumeResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputVolumeRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputVolumeResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputAudioBalanceRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputAudioBalanceResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputAudioBalanceRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputAudioBalanceResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputAudioSyncOffsetRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputAudioSyncOffsetResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputAudioSyncOffsetRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputAudioSyncOffsetResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputAudioMonitorTypeRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputAudioMonitorTypeResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputAudioMonitorTypeRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputAudioMonitorTypeResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputAudioTracksRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputAudioTracksResponse;
use SoureCode\OBS\Protocol\Request\Inputs\SetInputAudioTracksRequest;
use SoureCode\OBS\Protocol\Response\Inputs\SetInputAudioTracksResponse;
use SoureCode\OBS\Protocol\Request\Inputs\GetInputPropertiesListPropertyItemsRequest;
use SoureCode\OBS\Protocol\Response\Inputs\GetInputPropertiesListPropertyItemsResponse;
use SoureCode\OBS\Protocol\Request\Inputs\PressInputPropertiesButtonRequest;
use SoureCode\OBS\Protocol\Response\Inputs\PressInputPropertiesButtonResponse;
use SoureCode\OBS\Protocol\Request\MediaInputs\GetMediaInputStatusRequest;
use SoureCode\OBS\Protocol\Response\MediaInputs\GetMediaInputStatusResponse;
use SoureCode\OBS\Protocol\Request\MediaInputs\SetMediaInputCursorRequest;
use SoureCode\OBS\Protocol\Response\MediaInputs\SetMediaInputCursorResponse;
use SoureCode\OBS\Protocol\Request\MediaInputs\OffsetMediaInputCursorRequest;
use SoureCode\OBS\Protocol\Response\MediaInputs\OffsetMediaInputCursorResponse;
use SoureCode\OBS\Protocol\Request\MediaInputs\TriggerMediaInputActionRequest;
use SoureCode\OBS\Protocol\Response\MediaInputs\TriggerMediaInputActionResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetVirtualCamStatusRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetVirtualCamStatusResponse;
use SoureCode\OBS\Protocol\Request\Outputs\ToggleVirtualCamRequest;
use SoureCode\OBS\Protocol\Response\Outputs\ToggleVirtualCamResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StartVirtualCamRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StartVirtualCamResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StopVirtualCamRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StopVirtualCamResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetReplayBufferStatusRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetReplayBufferStatusResponse;
use SoureCode\OBS\Protocol\Request\Outputs\ToggleReplayBufferRequest;
use SoureCode\OBS\Protocol\Response\Outputs\ToggleReplayBufferResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StartReplayBufferRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StartReplayBufferResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StopReplayBufferRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StopReplayBufferResponse;
use SoureCode\OBS\Protocol\Request\Outputs\SaveReplayBufferRequest;
use SoureCode\OBS\Protocol\Response\Outputs\SaveReplayBufferResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetLastReplayBufferReplayRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetLastReplayBufferReplayResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetOutputListRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetOutputListResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetOutputStatusRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetOutputStatusResponse;
use SoureCode\OBS\Protocol\Request\Outputs\ToggleOutputRequest;
use SoureCode\OBS\Protocol\Response\Outputs\ToggleOutputResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StartOutputRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StartOutputResponse;
use SoureCode\OBS\Protocol\Request\Outputs\StopOutputRequest;
use SoureCode\OBS\Protocol\Response\Outputs\StopOutputResponse;
use SoureCode\OBS\Protocol\Request\Outputs\GetOutputSettingsRequest;
use SoureCode\OBS\Protocol\Response\Outputs\GetOutputSettingsResponse;
use SoureCode\OBS\Protocol\Request\Outputs\SetOutputSettingsRequest;
use SoureCode\OBS\Protocol\Response\Outputs\SetOutputSettingsResponse;
use SoureCode\OBS\Protocol\Request\Record\GetRecordStatusRequest;
use SoureCode\OBS\Protocol\Response\Record\GetRecordStatusResponse;
use SoureCode\OBS\Protocol\Request\Record\ToggleRecordRequest;
use SoureCode\OBS\Protocol\Response\Record\ToggleRecordResponse;
use SoureCode\OBS\Protocol\Request\Record\StartRecordRequest;
use SoureCode\OBS\Protocol\Response\Record\StartRecordResponse;
use SoureCode\OBS\Protocol\Request\Record\StopRecordRequest;
use SoureCode\OBS\Protocol\Response\Record\StopRecordResponse;
use SoureCode\OBS\Protocol\Request\Record\ToggleRecordPauseRequest;
use SoureCode\OBS\Protocol\Response\Record\ToggleRecordPauseResponse;
use SoureCode\OBS\Protocol\Request\Record\PauseRecordRequest;
use SoureCode\OBS\Protocol\Response\Record\PauseRecordResponse;
use SoureCode\OBS\Protocol\Request\Record\ResumeRecordRequest;
use SoureCode\OBS\Protocol\Response\Record\ResumeRecordResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemListRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemListResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetGroupSceneItemListRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetGroupSceneItemListResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemIdRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemIdResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemSourceRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemSourceResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\CreateSceneItemRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\CreateSceneItemResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\RemoveSceneItemRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\RemoveSceneItemResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\DuplicateSceneItemRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\DuplicateSceneItemResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemTransformRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemTransformResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\SetSceneItemTransformRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\SetSceneItemTransformResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemEnabledRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemEnabledResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\SetSceneItemEnabledRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\SetSceneItemEnabledResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemLockedRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemLockedResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\SetSceneItemLockedRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\SetSceneItemLockedResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemIndexRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemIndexResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\SetSceneItemIndexRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\SetSceneItemIndexResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\GetSceneItemBlendModeRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\GetSceneItemBlendModeResponse;
use SoureCode\OBS\Protocol\Request\SceneItems\SetSceneItemBlendModeRequest;
use SoureCode\OBS\Protocol\Response\SceneItems\SetSceneItemBlendModeResponse;
use SoureCode\OBS\Protocol\Request\Scenes\GetSceneListRequest;
use SoureCode\OBS\Protocol\Response\Scenes\GetSceneListResponse;
use SoureCode\OBS\Protocol\Request\Scenes\GetGroupListRequest;
use SoureCode\OBS\Protocol\Response\Scenes\GetGroupListResponse;
use SoureCode\OBS\Protocol\Request\Scenes\GetCurrentProgramSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\GetCurrentProgramSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\SetCurrentProgramSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\SetCurrentProgramSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\GetCurrentPreviewSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\GetCurrentPreviewSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\SetCurrentPreviewSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\SetCurrentPreviewSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\CreateSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\CreateSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\RemoveSceneRequest;
use SoureCode\OBS\Protocol\Response\Scenes\RemoveSceneResponse;
use SoureCode\OBS\Protocol\Request\Scenes\SetSceneNameRequest;
use SoureCode\OBS\Protocol\Response\Scenes\SetSceneNameResponse;
use SoureCode\OBS\Protocol\Request\Scenes\GetSceneSceneTransitionOverrideRequest;
use SoureCode\OBS\Protocol\Response\Scenes\GetSceneSceneTransitionOverrideResponse;
use SoureCode\OBS\Protocol\Request\Scenes\SetSceneSceneTransitionOverrideRequest;
use SoureCode\OBS\Protocol\Response\Scenes\SetSceneSceneTransitionOverrideResponse;
use SoureCode\OBS\Protocol\Request\Sources\GetSourceActiveRequest;
use SoureCode\OBS\Protocol\Response\Sources\GetSourceActiveResponse;
use SoureCode\OBS\Protocol\Request\Sources\GetSourceScreenshotRequest;
use SoureCode\OBS\Protocol\Response\Sources\GetSourceScreenshotResponse;
use SoureCode\OBS\Protocol\Request\Sources\SaveSourceScreenshotRequest;
use SoureCode\OBS\Protocol\Response\Sources\SaveSourceScreenshotResponse;
use SoureCode\OBS\Protocol\Request\Stream\GetStreamStatusRequest;
use SoureCode\OBS\Protocol\Response\Stream\GetStreamStatusResponse;
use SoureCode\OBS\Protocol\Request\Stream\ToggleStreamRequest;
use SoureCode\OBS\Protocol\Response\Stream\ToggleStreamResponse;
use SoureCode\OBS\Protocol\Request\Stream\StartStreamRequest;
use SoureCode\OBS\Protocol\Response\Stream\StartStreamResponse;
use SoureCode\OBS\Protocol\Request\Stream\StopStreamRequest;
use SoureCode\OBS\Protocol\Response\Stream\StopStreamResponse;
use SoureCode\OBS\Protocol\Request\Stream\SendStreamCaptionRequest;
use SoureCode\OBS\Protocol\Response\Stream\SendStreamCaptionResponse;
use SoureCode\OBS\Protocol\Request\Transitions\GetTransitionKindListRequest;
use SoureCode\OBS\Protocol\Response\Transitions\GetTransitionKindListResponse;
use SoureCode\OBS\Protocol\Request\Transitions\GetSceneTransitionListRequest;
use SoureCode\OBS\Protocol\Response\Transitions\GetSceneTransitionListResponse;
use SoureCode\OBS\Protocol\Request\Transitions\GetCurrentSceneTransitionRequest;
use SoureCode\OBS\Protocol\Response\Transitions\GetCurrentSceneTransitionResponse;
use SoureCode\OBS\Protocol\Request\Transitions\SetCurrentSceneTransitionRequest;
use SoureCode\OBS\Protocol\Response\Transitions\SetCurrentSceneTransitionResponse;
use SoureCode\OBS\Protocol\Request\Transitions\SetCurrentSceneTransitionDurationRequest;
use SoureCode\OBS\Protocol\Response\Transitions\SetCurrentSceneTransitionDurationResponse;
use SoureCode\OBS\Protocol\Request\Transitions\SetCurrentSceneTransitionSettingsRequest;
use SoureCode\OBS\Protocol\Response\Transitions\SetCurrentSceneTransitionSettingsResponse;
use SoureCode\OBS\Protocol\Request\Transitions\GetCurrentSceneTransitionCursorRequest;
use SoureCode\OBS\Protocol\Response\Transitions\GetCurrentSceneTransitionCursorResponse;
use SoureCode\OBS\Protocol\Request\Transitions\TriggerStudioModeTransitionRequest;
use SoureCode\OBS\Protocol\Response\Transitions\TriggerStudioModeTransitionResponse;
use SoureCode\OBS\Protocol\Request\Transitions\SetTBarPositionRequest;
use SoureCode\OBS\Protocol\Response\Transitions\SetTBarPositionResponse;
use SoureCode\OBS\Protocol\Request\Ui\GetStudioModeEnabledRequest;
use SoureCode\OBS\Protocol\Response\Ui\GetStudioModeEnabledResponse;
use SoureCode\OBS\Protocol\Request\Ui\SetStudioModeEnabledRequest;
use SoureCode\OBS\Protocol\Response\Ui\SetStudioModeEnabledResponse;
use SoureCode\OBS\Protocol\Request\Ui\OpenInputPropertiesDialogRequest;
use SoureCode\OBS\Protocol\Response\Ui\OpenInputPropertiesDialogResponse;
use SoureCode\OBS\Protocol\Request\Ui\OpenInputFiltersDialogRequest;
use SoureCode\OBS\Protocol\Response\Ui\OpenInputFiltersDialogResponse;
use SoureCode\OBS\Protocol\Request\Ui\OpenInputInteractDialogRequest;
use SoureCode\OBS\Protocol\Response\Ui\OpenInputInteractDialogResponse;
use SoureCode\OBS\Protocol\Request\Ui\GetMonitorListRequest;
use SoureCode\OBS\Protocol\Response\Ui\GetMonitorListResponse;
use SoureCode\OBS\Protocol\Request\Ui\OpenVideoMixProjectorRequest;
use SoureCode\OBS\Protocol\Response\Ui\OpenVideoMixProjectorResponse;
use SoureCode\OBS\Protocol\Request\Ui\OpenSourceProjectorRequest;
use SoureCode\OBS\Protocol\Response\Ui\OpenSourceProjectorResponse;

class Client extends BaseClient
{
    public function getPersistentData(string $realm, string $slotName): GetPersistentDataResponse
    {
        return $this->request(new GetPersistentDataRequest($realm, $slotName))->d->responseData;
    }
    public function setPersistentData(string $realm, string $slotName, mixed $slotValue): SetPersistentDataResponse
    {
        return $this->request(new SetPersistentDataRequest($realm, $slotName, $slotValue))->d->responseData;
    }
    public function getSceneCollectionList(): GetSceneCollectionListResponse
    {
        return $this->request(new GetSceneCollectionListRequest())->d->responseData;
    }
    public function setCurrentSceneCollection(string $sceneCollectionName): SetCurrentSceneCollectionResponse
    {
        return $this->request(new SetCurrentSceneCollectionRequest($sceneCollectionName))->d->responseData;
    }
    public function createSceneCollection(string $sceneCollectionName): CreateSceneCollectionResponse
    {
        return $this->request(new CreateSceneCollectionRequest($sceneCollectionName))->d->responseData;
    }
    public function getProfileList(): GetProfileListResponse
    {
        return $this->request(new GetProfileListRequest())->d->responseData;
    }
    public function setCurrentProfile(string $profileName): SetCurrentProfileResponse
    {
        return $this->request(new SetCurrentProfileRequest($profileName))->d->responseData;
    }
    public function createProfile(string $profileName): CreateProfileResponse
    {
        return $this->request(new CreateProfileRequest($profileName))->d->responseData;
    }
    public function removeProfile(string $profileName): RemoveProfileResponse
    {
        return $this->request(new RemoveProfileRequest($profileName))->d->responseData;
    }
    public function getProfileParameter(string $parameterCategory, string $parameterName): GetProfileParameterResponse
    {
        return $this->request(new GetProfileParameterRequest($parameterCategory, $parameterName))->d->responseData;
    }
    public function setProfileParameter(string $parameterCategory, string $parameterName, ?string $parameterValue = null): SetProfileParameterResponse
    {
        return $this->request(new SetProfileParameterRequest($parameterCategory, $parameterName, $parameterValue))->d->responseData;
    }
    public function getVideoSettings(): GetVideoSettingsResponse
    {
        return $this->request(new GetVideoSettingsRequest())->d->responseData;
    }
    public function setVideoSettings(?int $fpsNumerator = null, ?int $fpsDenominator = null, ?int $baseWidth = null, ?int $baseHeight = null, ?int $outputWidth = null, ?int $outputHeight = null): SetVideoSettingsResponse
    {
        return $this->request(new SetVideoSettingsRequest($fpsNumerator, $fpsDenominator, $baseWidth, $baseHeight, $outputWidth, $outputHeight))->d->responseData;
    }
    public function getStreamServiceSettings(): GetStreamServiceSettingsResponse
    {
        return $this->request(new GetStreamServiceSettingsRequest())->d->responseData;
    }
    public function setStreamServiceSettings(string $streamServiceType, array $streamServiceSettings): SetStreamServiceSettingsResponse
    {
        return $this->request(new SetStreamServiceSettingsRequest($streamServiceType, $streamServiceSettings))->d->responseData;
    }
    public function getRecordDirectory(): GetRecordDirectoryResponse
    {
        return $this->request(new GetRecordDirectoryRequest())->d->responseData;
    }
    public function setRecordDirectory(string $recordDirectory): SetRecordDirectoryResponse
    {
        return $this->request(new SetRecordDirectoryRequest($recordDirectory))->d->responseData;
    }
    public function getSourceFilterKindList(): GetSourceFilterKindListResponse
    {
        return $this->request(new GetSourceFilterKindListRequest())->d->responseData;
    }
    public function getSourceFilterList(?string $sourceName = null, ?string $sourceUuid = null): GetSourceFilterListResponse
    {
        return $this->request(new GetSourceFilterListRequest($sourceName, $sourceUuid))->d->responseData;
    }
    public function getSourceFilterDefaultSettings(string $filterKind): GetSourceFilterDefaultSettingsResponse
    {
        return $this->request(new GetSourceFilterDefaultSettingsRequest($filterKind))->d->responseData;
    }
    public function createSourceFilter(string $filterName, string $filterKind, ?string $sourceName = null, ?string $sourceUuid = null, ?array $filterSettings = null): CreateSourceFilterResponse
    {
        return $this->request(new CreateSourceFilterRequest($filterName, $filterKind, $sourceName, $sourceUuid, $filterSettings))->d->responseData;
    }
    public function removeSourceFilter(string $filterName, ?string $sourceName = null, ?string $sourceUuid = null): RemoveSourceFilterResponse
    {
        return $this->request(new RemoveSourceFilterRequest($filterName, $sourceName, $sourceUuid))->d->responseData;
    }
    public function setSourceFilterName(string $filterName, string $newFilterName, ?string $sourceName = null, ?string $sourceUuid = null): SetSourceFilterNameResponse
    {
        return $this->request(new SetSourceFilterNameRequest($filterName, $newFilterName, $sourceName, $sourceUuid))->d->responseData;
    }
    public function getSourceFilter(string $filterName, ?string $sourceName = null, ?string $sourceUuid = null): GetSourceFilterResponse
    {
        return $this->request(new GetSourceFilterRequest($filterName, $sourceName, $sourceUuid))->d->responseData;
    }
    public function setSourceFilterIndex(string $filterName, int $filterIndex, ?string $sourceName = null, ?string $sourceUuid = null): SetSourceFilterIndexResponse
    {
        return $this->request(new SetSourceFilterIndexRequest($filterName, $filterIndex, $sourceName, $sourceUuid))->d->responseData;
    }
    public function setSourceFilterSettings(string $filterName, array $filterSettings, ?string $sourceName = null, ?string $sourceUuid = null, ?bool $overlay = null): SetSourceFilterSettingsResponse
    {
        return $this->request(new SetSourceFilterSettingsRequest($filterName, $filterSettings, $sourceName, $sourceUuid, $overlay))->d->responseData;
    }
    public function setSourceFilterEnabled(string $filterName, bool $filterEnabled, ?string $sourceName = null, ?string $sourceUuid = null): SetSourceFilterEnabledResponse
    {
        return $this->request(new SetSourceFilterEnabledRequest($filterName, $filterEnabled, $sourceName, $sourceUuid))->d->responseData;
    }
    public function getVersion(): GetVersionResponse
    {
        return $this->request(new GetVersionRequest())->d->responseData;
    }
    public function getStats(): GetStatsResponse
    {
        return $this->request(new GetStatsRequest())->d->responseData;
    }
    public function broadcastCustomEvent(array $eventData): BroadcastCustomEventResponse
    {
        return $this->request(new BroadcastCustomEventRequest($eventData))->d->responseData;
    }
    public function callVendorRequest(string $vendorName, string $requestType, ?array $requestData = null): CallVendorRequestResponse
    {
        return $this->request(new CallVendorRequestRequest($vendorName, $requestType, $requestData))->d->responseData;
    }
    public function getHotkeyList(): GetHotkeyListResponse
    {
        return $this->request(new GetHotkeyListRequest())->d->responseData;
    }
    public function triggerHotkeyByName(string $hotkeyName, ?string $contextName = null): TriggerHotkeyByNameResponse
    {
        return $this->request(new TriggerHotkeyByNameRequest($hotkeyName, $contextName))->d->responseData;
    }
    public function triggerHotkeyByKeySequence(?string $keyId = null, ?array $keyModifiers = null, ?bool $keyModifiersShift = null, ?bool $keyModifiersControl = null, ?bool $keyModifiersAlt = null, ?bool $keyModifiersCommand = null): TriggerHotkeyByKeySequenceResponse
    {
        return $this->request(new TriggerHotkeyByKeySequenceRequest($keyId, $keyModifiers, $keyModifiersShift, $keyModifiersControl, $keyModifiersAlt, $keyModifiersCommand))->d->responseData;
    }
    public function sleep(?int $sleepMillis = null, ?int $sleepFrames = null): SleepResponse
    {
        return $this->request(new SleepRequest($sleepMillis, $sleepFrames))->d->responseData;
    }
    public function getInputList(?string $inputKind = null): GetInputListResponse
    {
        return $this->request(new GetInputListRequest($inputKind))->d->responseData;
    }
    public function getInputKindList(?bool $unversioned = null): GetInputKindListResponse
    {
        return $this->request(new GetInputKindListRequest($unversioned))->d->responseData;
    }
    public function getSpecialInputs(): GetSpecialInputsResponse
    {
        return $this->request(new GetSpecialInputsRequest())->d->responseData;
    }
    public function createInput(string $inputName, string $inputKind, ?string $sceneName = null, ?string $sceneUuid = null, ?array $inputSettings = null, ?bool $sceneItemEnabled = null): CreateInputResponse
    {
        return $this->request(new CreateInputRequest($inputName, $inputKind, $sceneName, $sceneUuid, $inputSettings, $sceneItemEnabled))->d->responseData;
    }
    public function removeInput(?string $inputName = null, ?string $inputUuid = null): RemoveInputResponse
    {
        return $this->request(new RemoveInputRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputName(string $newInputName, ?string $inputName = null, ?string $inputUuid = null): SetInputNameResponse
    {
        return $this->request(new SetInputNameRequest($newInputName, $inputName, $inputUuid))->d->responseData;
    }
    public function getInputDefaultSettings(string $inputKind): GetInputDefaultSettingsResponse
    {
        return $this->request(new GetInputDefaultSettingsRequest($inputKind))->d->responseData;
    }
    public function getInputSettings(?string $inputName = null, ?string $inputUuid = null): GetInputSettingsResponse
    {
        return $this->request(new GetInputSettingsRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputSettings(array $inputSettings, ?string $inputName = null, ?string $inputUuid = null, ?bool $overlay = null): SetInputSettingsResponse
    {
        return $this->request(new SetInputSettingsRequest($inputSettings, $inputName, $inputUuid, $overlay))->d->responseData;
    }
    public function getInputMute(?string $inputName = null, ?string $inputUuid = null): GetInputMuteResponse
    {
        return $this->request(new GetInputMuteRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputMute(bool $inputMuted, ?string $inputName = null, ?string $inputUuid = null): SetInputMuteResponse
    {
        return $this->request(new SetInputMuteRequest($inputMuted, $inputName, $inputUuid))->d->responseData;
    }
    public function toggleInputMute(?string $inputName = null, ?string $inputUuid = null): ToggleInputMuteResponse
    {
        return $this->request(new ToggleInputMuteRequest($inputName, $inputUuid))->d->responseData;
    }
    public function getInputVolume(?string $inputName = null, ?string $inputUuid = null): GetInputVolumeResponse
    {
        return $this->request(new GetInputVolumeRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputVolume(?string $inputName = null, ?string $inputUuid = null, ?int $inputVolumeMul = null, ?int $inputVolumeDb = null): SetInputVolumeResponse
    {
        return $this->request(new SetInputVolumeRequest($inputName, $inputUuid, $inputVolumeMul, $inputVolumeDb))->d->responseData;
    }
    public function getInputAudioBalance(?string $inputName = null, ?string $inputUuid = null): GetInputAudioBalanceResponse
    {
        return $this->request(new GetInputAudioBalanceRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputAudioBalance(int $inputAudioBalance, ?string $inputName = null, ?string $inputUuid = null): SetInputAudioBalanceResponse
    {
        return $this->request(new SetInputAudioBalanceRequest($inputAudioBalance, $inputName, $inputUuid))->d->responseData;
    }
    public function getInputAudioSyncOffset(?string $inputName = null, ?string $inputUuid = null): GetInputAudioSyncOffsetResponse
    {
        return $this->request(new GetInputAudioSyncOffsetRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputAudioSyncOffset(int $inputAudioSyncOffset, ?string $inputName = null, ?string $inputUuid = null): SetInputAudioSyncOffsetResponse
    {
        return $this->request(new SetInputAudioSyncOffsetRequest($inputAudioSyncOffset, $inputName, $inputUuid))->d->responseData;
    }
    public function getInputAudioMonitorType(?string $inputName = null, ?string $inputUuid = null): GetInputAudioMonitorTypeResponse
    {
        return $this->request(new GetInputAudioMonitorTypeRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputAudioMonitorType(string $monitorType, ?string $inputName = null, ?string $inputUuid = null): SetInputAudioMonitorTypeResponse
    {
        return $this->request(new SetInputAudioMonitorTypeRequest($monitorType, $inputName, $inputUuid))->d->responseData;
    }
    public function getInputAudioTracks(?string $inputName = null, ?string $inputUuid = null): GetInputAudioTracksResponse
    {
        return $this->request(new GetInputAudioTracksRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setInputAudioTracks(array $inputAudioTracks, ?string $inputName = null, ?string $inputUuid = null): SetInputAudioTracksResponse
    {
        return $this->request(new SetInputAudioTracksRequest($inputAudioTracks, $inputName, $inputUuid))->d->responseData;
    }
    public function getInputPropertiesListPropertyItems(string $propertyName, ?string $inputName = null, ?string $inputUuid = null): GetInputPropertiesListPropertyItemsResponse
    {
        return $this->request(new GetInputPropertiesListPropertyItemsRequest($propertyName, $inputName, $inputUuid))->d->responseData;
    }
    public function pressInputPropertiesButton(string $propertyName, ?string $inputName = null, ?string $inputUuid = null): PressInputPropertiesButtonResponse
    {
        return $this->request(new PressInputPropertiesButtonRequest($propertyName, $inputName, $inputUuid))->d->responseData;
    }
    public function getMediaInputStatus(?string $inputName = null, ?string $inputUuid = null): GetMediaInputStatusResponse
    {
        return $this->request(new GetMediaInputStatusRequest($inputName, $inputUuid))->d->responseData;
    }
    public function setMediaInputCursor(int $mediaCursor, ?string $inputName = null, ?string $inputUuid = null): SetMediaInputCursorResponse
    {
        return $this->request(new SetMediaInputCursorRequest($mediaCursor, $inputName, $inputUuid))->d->responseData;
    }
    public function offsetMediaInputCursor(int $mediaCursorOffset, ?string $inputName = null, ?string $inputUuid = null): OffsetMediaInputCursorResponse
    {
        return $this->request(new OffsetMediaInputCursorRequest($mediaCursorOffset, $inputName, $inputUuid))->d->responseData;
    }
    public function triggerMediaInputAction(string $mediaAction, ?string $inputName = null, ?string $inputUuid = null): TriggerMediaInputActionResponse
    {
        return $this->request(new TriggerMediaInputActionRequest($mediaAction, $inputName, $inputUuid))->d->responseData;
    }
    public function getVirtualCamStatus(): GetVirtualCamStatusResponse
    {
        return $this->request(new GetVirtualCamStatusRequest())->d->responseData;
    }
    public function toggleVirtualCam(): ToggleVirtualCamResponse
    {
        return $this->request(new ToggleVirtualCamRequest())->d->responseData;
    }
    public function startVirtualCam(): StartVirtualCamResponse
    {
        return $this->request(new StartVirtualCamRequest())->d->responseData;
    }
    public function stopVirtualCam(): StopVirtualCamResponse
    {
        return $this->request(new StopVirtualCamRequest())->d->responseData;
    }
    public function getReplayBufferStatus(): GetReplayBufferStatusResponse
    {
        return $this->request(new GetReplayBufferStatusRequest())->d->responseData;
    }
    public function toggleReplayBuffer(): ToggleReplayBufferResponse
    {
        return $this->request(new ToggleReplayBufferRequest())->d->responseData;
    }
    public function startReplayBuffer(): StartReplayBufferResponse
    {
        return $this->request(new StartReplayBufferRequest())->d->responseData;
    }
    public function stopReplayBuffer(): StopReplayBufferResponse
    {
        return $this->request(new StopReplayBufferRequest())->d->responseData;
    }
    public function saveReplayBuffer(): SaveReplayBufferResponse
    {
        return $this->request(new SaveReplayBufferRequest())->d->responseData;
    }
    public function getLastReplayBufferReplay(): GetLastReplayBufferReplayResponse
    {
        return $this->request(new GetLastReplayBufferReplayRequest())->d->responseData;
    }
    public function getOutputList(): GetOutputListResponse
    {
        return $this->request(new GetOutputListRequest())->d->responseData;
    }
    public function getOutputStatus(string $outputName): GetOutputStatusResponse
    {
        return $this->request(new GetOutputStatusRequest($outputName))->d->responseData;
    }
    public function toggleOutput(string $outputName): ToggleOutputResponse
    {
        return $this->request(new ToggleOutputRequest($outputName))->d->responseData;
    }
    public function startOutput(string $outputName): StartOutputResponse
    {
        return $this->request(new StartOutputRequest($outputName))->d->responseData;
    }
    public function stopOutput(string $outputName): StopOutputResponse
    {
        return $this->request(new StopOutputRequest($outputName))->d->responseData;
    }
    public function getOutputSettings(string $outputName): GetOutputSettingsResponse
    {
        return $this->request(new GetOutputSettingsRequest($outputName))->d->responseData;
    }
    public function setOutputSettings(string $outputName, array $outputSettings): SetOutputSettingsResponse
    {
        return $this->request(new SetOutputSettingsRequest($outputName, $outputSettings))->d->responseData;
    }
    public function getRecordStatus(): GetRecordStatusResponse
    {
        return $this->request(new GetRecordStatusRequest())->d->responseData;
    }
    public function toggleRecord(): ToggleRecordResponse
    {
        return $this->request(new ToggleRecordRequest())->d->responseData;
    }
    public function startRecord(): StartRecordResponse
    {
        return $this->request(new StartRecordRequest())->d->responseData;
    }
    public function stopRecord(): StopRecordResponse
    {
        return $this->request(new StopRecordRequest())->d->responseData;
    }
    public function toggleRecordPause(): ToggleRecordPauseResponse
    {
        return $this->request(new ToggleRecordPauseRequest())->d->responseData;
    }
    public function pauseRecord(): PauseRecordResponse
    {
        return $this->request(new PauseRecordRequest())->d->responseData;
    }
    public function resumeRecord(): ResumeRecordResponse
    {
        return $this->request(new ResumeRecordRequest())->d->responseData;
    }
    public function getSceneItemList(?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemListResponse
    {
        return $this->request(new GetSceneItemListRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function getGroupSceneItemList(?string $sceneName = null, ?string $sceneUuid = null): GetGroupSceneItemListResponse
    {
        return $this->request(new GetGroupSceneItemListRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneItemId(string $sourceName, ?string $sceneName = null, ?string $sceneUuid = null, ?int $searchOffset = null): GetSceneItemIdResponse
    {
        return $this->request(new GetSceneItemIdRequest($sourceName, $sceneName, $sceneUuid, $searchOffset))->d->responseData;
    }
    public function getSceneItemSource(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemSourceResponse
    {
        return $this->request(new GetSceneItemSourceRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function createSceneItem(?string $sceneName = null, ?string $sceneUuid = null, ?string $sourceName = null, ?string $sourceUuid = null, ?bool $sceneItemEnabled = null): CreateSceneItemResponse
    {
        return $this->request(new CreateSceneItemRequest($sceneName, $sceneUuid, $sourceName, $sourceUuid, $sceneItemEnabled))->d->responseData;
    }
    public function removeSceneItem(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): RemoveSceneItemResponse
    {
        return $this->request(new RemoveSceneItemRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function duplicateSceneItem(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null, ?string $destinationSceneName = null, ?string $destinationSceneUuid = null): DuplicateSceneItemResponse
    {
        return $this->request(new DuplicateSceneItemRequest($sceneItemId, $sceneName, $sceneUuid, $destinationSceneName, $destinationSceneUuid))->d->responseData;
    }
    public function getSceneItemTransform(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemTransformResponse
    {
        return $this->request(new GetSceneItemTransformRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneItemTransform(int $sceneItemId, array $sceneItemTransform, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneItemTransformResponse
    {
        return $this->request(new SetSceneItemTransformRequest($sceneItemId, $sceneItemTransform, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneItemEnabled(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemEnabledResponse
    {
        return $this->request(new GetSceneItemEnabledRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneItemEnabled(int $sceneItemId, bool $sceneItemEnabled, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneItemEnabledResponse
    {
        return $this->request(new SetSceneItemEnabledRequest($sceneItemId, $sceneItemEnabled, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneItemLocked(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemLockedResponse
    {
        return $this->request(new GetSceneItemLockedRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneItemLocked(int $sceneItemId, bool $sceneItemLocked, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneItemLockedResponse
    {
        return $this->request(new SetSceneItemLockedRequest($sceneItemId, $sceneItemLocked, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneItemIndex(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemIndexResponse
    {
        return $this->request(new GetSceneItemIndexRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneItemIndex(int $sceneItemId, int $sceneItemIndex, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneItemIndexResponse
    {
        return $this->request(new SetSceneItemIndexRequest($sceneItemId, $sceneItemIndex, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneItemBlendMode(int $sceneItemId, ?string $sceneName = null, ?string $sceneUuid = null): GetSceneItemBlendModeResponse
    {
        return $this->request(new GetSceneItemBlendModeRequest($sceneItemId, $sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneItemBlendMode(int $sceneItemId, string $sceneItemBlendMode, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneItemBlendModeResponse
    {
        return $this->request(new SetSceneItemBlendModeRequest($sceneItemId, $sceneItemBlendMode, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneList(): GetSceneListResponse
    {
        return $this->request(new GetSceneListRequest())->d->responseData;
    }
    public function getGroupList(): GetGroupListResponse
    {
        return $this->request(new GetGroupListRequest())->d->responseData;
    }
    public function getCurrentProgramScene(): GetCurrentProgramSceneResponse
    {
        return $this->request(new GetCurrentProgramSceneRequest())->d->responseData;
    }
    public function setCurrentProgramScene(?string $sceneName = null, ?string $sceneUuid = null): SetCurrentProgramSceneResponse
    {
        return $this->request(new SetCurrentProgramSceneRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function getCurrentPreviewScene(): GetCurrentPreviewSceneResponse
    {
        return $this->request(new GetCurrentPreviewSceneRequest())->d->responseData;
    }
    public function setCurrentPreviewScene(?string $sceneName = null, ?string $sceneUuid = null): SetCurrentPreviewSceneResponse
    {
        return $this->request(new SetCurrentPreviewSceneRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function createScene(string $sceneName): CreateSceneResponse
    {
        return $this->request(new CreateSceneRequest($sceneName))->d->responseData;
    }
    public function removeScene(?string $sceneName = null, ?string $sceneUuid = null): RemoveSceneResponse
    {
        return $this->request(new RemoveSceneRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneName(string $newSceneName, ?string $sceneName = null, ?string $sceneUuid = null): SetSceneNameResponse
    {
        return $this->request(new SetSceneNameRequest($newSceneName, $sceneName, $sceneUuid))->d->responseData;
    }
    public function getSceneSceneTransitionOverride(?string $sceneName = null, ?string $sceneUuid = null): GetSceneSceneTransitionOverrideResponse
    {
        return $this->request(new GetSceneSceneTransitionOverrideRequest($sceneName, $sceneUuid))->d->responseData;
    }
    public function setSceneSceneTransitionOverride(?string $sceneName = null, ?string $sceneUuid = null, ?string $transitionName = null, ?int $transitionDuration = null): SetSceneSceneTransitionOverrideResponse
    {
        return $this->request(new SetSceneSceneTransitionOverrideRequest($sceneName, $sceneUuid, $transitionName, $transitionDuration))->d->responseData;
    }
    public function getSourceActive(?string $sourceName = null, ?string $sourceUuid = null): GetSourceActiveResponse
    {
        return $this->request(new GetSourceActiveRequest($sourceName, $sourceUuid))->d->responseData;
    }
    public function getSourceScreenshot(string $imageFormat, ?string $sourceName = null, ?string $sourceUuid = null, ?int $imageWidth = null, ?int $imageHeight = null, ?int $imageCompressionQuality = null): GetSourceScreenshotResponse
    {
        return $this->request(new GetSourceScreenshotRequest($imageFormat, $sourceName, $sourceUuid, $imageWidth, $imageHeight, $imageCompressionQuality))->d->responseData;
    }
    public function saveSourceScreenshot(string $imageFormat, string $imageFilePath, ?string $sourceName = null, ?string $sourceUuid = null, ?int $imageWidth = null, ?int $imageHeight = null, ?int $imageCompressionQuality = null): SaveSourceScreenshotResponse
    {
        return $this->request(new SaveSourceScreenshotRequest($imageFormat, $imageFilePath, $sourceName, $sourceUuid, $imageWidth, $imageHeight, $imageCompressionQuality))->d->responseData;
    }
    public function getStreamStatus(): GetStreamStatusResponse
    {
        return $this->request(new GetStreamStatusRequest())->d->responseData;
    }
    public function toggleStream(): ToggleStreamResponse
    {
        return $this->request(new ToggleStreamRequest())->d->responseData;
    }
    public function startStream(): StartStreamResponse
    {
        return $this->request(new StartStreamRequest())->d->responseData;
    }
    public function stopStream(): StopStreamResponse
    {
        return $this->request(new StopStreamRequest())->d->responseData;
    }
    public function sendStreamCaption(string $captionText): SendStreamCaptionResponse
    {
        return $this->request(new SendStreamCaptionRequest($captionText))->d->responseData;
    }
    public function getTransitionKindList(): GetTransitionKindListResponse
    {
        return $this->request(new GetTransitionKindListRequest())->d->responseData;
    }
    public function getSceneTransitionList(): GetSceneTransitionListResponse
    {
        return $this->request(new GetSceneTransitionListRequest())->d->responseData;
    }
    public function getCurrentSceneTransition(): GetCurrentSceneTransitionResponse
    {
        return $this->request(new GetCurrentSceneTransitionRequest())->d->responseData;
    }
    public function setCurrentSceneTransition(string $transitionName): SetCurrentSceneTransitionResponse
    {
        return $this->request(new SetCurrentSceneTransitionRequest($transitionName))->d->responseData;
    }
    public function setCurrentSceneTransitionDuration(int $transitionDuration): SetCurrentSceneTransitionDurationResponse
    {
        return $this->request(new SetCurrentSceneTransitionDurationRequest($transitionDuration))->d->responseData;
    }
    public function setCurrentSceneTransitionSettings(array $transitionSettings, ?bool $overlay = null): SetCurrentSceneTransitionSettingsResponse
    {
        return $this->request(new SetCurrentSceneTransitionSettingsRequest($transitionSettings, $overlay))->d->responseData;
    }
    public function getCurrentSceneTransitionCursor(): GetCurrentSceneTransitionCursorResponse
    {
        return $this->request(new GetCurrentSceneTransitionCursorRequest())->d->responseData;
    }
    public function triggerStudioModeTransition(): TriggerStudioModeTransitionResponse
    {
        return $this->request(new TriggerStudioModeTransitionRequest())->d->responseData;
    }
    public function setTBarPosition(int $position, ?bool $release = null): SetTBarPositionResponse
    {
        return $this->request(new SetTBarPositionRequest($position, $release))->d->responseData;
    }
    public function getStudioModeEnabled(): GetStudioModeEnabledResponse
    {
        return $this->request(new GetStudioModeEnabledRequest())->d->responseData;
    }
    public function setStudioModeEnabled(bool $studioModeEnabled): SetStudioModeEnabledResponse
    {
        return $this->request(new SetStudioModeEnabledRequest($studioModeEnabled))->d->responseData;
    }
    public function openInputPropertiesDialog(?string $inputName = null, ?string $inputUuid = null): OpenInputPropertiesDialogResponse
    {
        return $this->request(new OpenInputPropertiesDialogRequest($inputName, $inputUuid))->d->responseData;
    }
    public function openInputFiltersDialog(?string $inputName = null, ?string $inputUuid = null): OpenInputFiltersDialogResponse
    {
        return $this->request(new OpenInputFiltersDialogRequest($inputName, $inputUuid))->d->responseData;
    }
    public function openInputInteractDialog(?string $inputName = null, ?string $inputUuid = null): OpenInputInteractDialogResponse
    {
        return $this->request(new OpenInputInteractDialogRequest($inputName, $inputUuid))->d->responseData;
    }
    public function getMonitorList(): GetMonitorListResponse
    {
        return $this->request(new GetMonitorListRequest())->d->responseData;
    }
    public function openVideoMixProjector(string $videoMixType, ?int $monitorIndex = null, ?string $projectorGeometry = null): OpenVideoMixProjectorResponse
    {
        return $this->request(new OpenVideoMixProjectorRequest($videoMixType, $monitorIndex, $projectorGeometry))->d->responseData;
    }
    public function openSourceProjector(?string $sourceName = null, ?string $sourceUuid = null, ?int $monitorIndex = null, ?string $projectorGeometry = null): OpenSourceProjectorResponse
    {
        return $this->request(new OpenSourceProjectorRequest($sourceName, $sourceUuid, $monitorIndex, $projectorGeometry))->d->responseData;
    }
}
