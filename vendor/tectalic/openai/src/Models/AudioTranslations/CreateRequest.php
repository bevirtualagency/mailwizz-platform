<?php

/**
 * Copyright (c) 2022-present Tectalic (https://tectalic.com)
 *
 * For copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * Please see the README.md file for usage instructions.
 */

declare(strict_types=1);

namespace Tectalic\OpenAi\Models\AudioTranslations;

use Tectalic\OpenAi\Models\AbstractModel;

final class CreateRequest extends AbstractModel
{
    /**
     * List of required property names.
     *
     * These properties must all be set when this Model is instantiated.
     */
    protected const REQUIRED = ['file', 'model'];

    /** List of properties that represent a file to be uploaded. */
    public const FILE_UPLOADS = ['file'];

    /** @var bool */
    protected $ignoreMissing = false;

    /**
     * The audio file object (not file name) translate, in one of these formats: flac,
     * mp3, mp4, mpeg, mpga, m4a, ogg, wav, or webm.
     *
     * @var string must be an absolute path to a file.
     */
    public $file;

    /**
     * ID of the model to use. Only whisper-1 is currently available.
     *
     * Example: 'whisper-1'
     *
     * @var mixed
     */
    public $model;

    /**
     * An optional text to guide the model's style or continue a previous audio
     * segment. The prompt should be in English.
     *
     * @var string
     */
    public $prompt;

    /**
     * The format of the transcript output, in one of these options: json, text, srt,
     * verbose_json, or vtt.
     *
     * Default Value: 'json'
     *
     * @var string
     */
    public $response_format;

    /**
     * The sampling temperature, between 0 and 1. Higher values like 0.8 will make the
     * output more random, while lower values like 0.2 will make it more focused and
     * deterministic. If set to 0, the model will use log probability to automatically
     * increase the temperature until certain thresholds are hit.
     *
     * Default Value: 0
     *
     * @var float|int
     */
    public $temperature;
}
