<?php

/**
 * Copyright (c) 2022-present Tectalic (https://tectalic.com)
 *
 * For copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * Please see the README.md file for usage instructions.
 */

declare(strict_types=1);

namespace Tectalic\OpenAi\Models\Embeddings;

use Tectalic\OpenAi\Models\AbstractModel;

final class CreateResponseUsage extends AbstractModel
{
    /**
     * List of required property names.
     *
     * These properties must all be set when this Model is instantiated.
     */
    protected const REQUIRED = ['prompt_tokens', 'total_tokens'];

    /**
     * The number of tokens used by the prompt.
     *
     * @var int
     */
    public $prompt_tokens;

    /**
     * The total number of tokens used by the request.
     *
     * @var int
     */
    public $total_tokens;
}
