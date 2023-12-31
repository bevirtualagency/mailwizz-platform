<?php

/**
 * Copyright (c) 2022-present Tectalic (https://tectalic.com)
 *
 * For copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * Please see the README.md file for usage instructions.
 */

declare(strict_types=1);

namespace Tectalic\OpenAi\Models\Moderations;

use Tectalic\OpenAi\Models\AbstractModel;

final class CreateResponseResultsItem extends AbstractModel
{
    /**
     * List of required property names.
     *
     * These properties must all be set when this Model is instantiated.
     */
    protected const REQUIRED = ['flagged', 'categories', 'category_scores'];

    /**
     * Whether the content violates OpenAI's usage policies.
     *
     * @var bool
     */
    public $flagged;

    /**
     * A list of the categories, and whether they are flagged or not.
     *
     * @var \Tectalic\OpenAi\Models\Moderations\CreateResponseResultsItemCategories
     */
    public $categories;

    /**
     * A list of the categories along with their scores as predicted by model.
     *
     * @var \Tectalic\OpenAi\Models\Moderations\CreateResponseResultsItemCategoryScores
     */
    public $category_scores;
}
