<?php declare(strict_types=1);
if (!defined('MW_PATH')) {
    exit('No direct script access allowed');
}

/**
 * This file is part of the MailWizz EMA application.
 *
 * @package MailWizz EMA
 * @author MailWizz Development Team <support@mailwizz.com>
 * @link https://www.mailwizz.com/
 * @copyright MailWizz EMA (https://www.mailwizz.com)
 * @license https://www.mailwizz.com/license/
 * @since 1.7.8
 */

?>

<div id="field-number-javascript-template" style="display: none;">
    <div class="field-row" data-start-index="{index}" data-field-type="<?php echo html_encode((string)$fieldType->identifier); ?>">
        <?php echo CHtml::hiddenField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][field_id]', (int)$model->field_id); ?>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;"><span class="glyphicon glyphicon-th-list"></span> <?php echo t('survey_fields', 'New number field'); ?></a>
            </li>
        </ul>
        <div class="panel panel-default no-top-border">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'label'); ?>
                            <?php echo CHtml::textField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][label]', $model->label, $model->getHtmlOptions('label')); ?>
                            <?php echo CHtml::error($model, 'label'); ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'required'); ?>
                            <?php echo CHtml::dropDownList($model->getModelName() . '[' . $fieldType->identifier . '][{index}][required]', $model->required, $model->getRequiredOptionsArray(), $model->getHtmlOptions('required')); ?>
                            <?php echo CHtml::error($model, 'required'); ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'visibility'); ?>
                            <?php echo CHtml::dropDownList($model->getModelName() . '[' . $fieldType->identifier . '][{index}][visibility]', $model->visibility, $model->getVisibilityOptionsArray(), $model->getHtmlOptions('visibility')); ?>
                            <?php echo CHtml::error($model, 'visibility'); ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'sort_order'); ?>
                            <?php echo CHtml::dropDownList($model->getModelName() . '[' . $fieldType->identifier . '][{index}][sort_order]', $model->sort_order, $model->getSortOrderOptionsArray(), $model->getHtmlOptions('sort_order', ['data-placement' => 'left'])); ?>
                            <?php echo CHtml::error($model, 'sort_order'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'help_text'); ?>
                            <?php echo CHtml::textField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][help_text]', $model->help_text, $model->getHtmlOptions('help_text')); ?>
                            <?php echo CHtml::error($model, 'help_text'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'default_value'); ?>
                            <?php echo CHtml::textField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][default_value]', $model->default_value, $model->getHtmlOptions('default_value')); ?>
                            <?php echo CHtml::error($model, 'default_value'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'description'); ?>
                            <?php echo CHtml::textArea($model->getModelName() . '[' . $fieldType->identifier . '][{index}][description]', $model->description, $model->getHtmlOptions('description')); ?>
                            <?php echo CHtml::error($model, 'description'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'min_value'); ?>
                            <?php echo CHtml::numberField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][min_value]', $model->min_value, $model->getHtmlOptions('min_value', ['step' => 'any'])); ?>
                            <?php echo CHtml::error($model, 'min_value'); ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'max_value'); ?>
                            <?php echo CHtml::numberField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][max_value]', $model->max_value, $model->getHtmlOptions('max_value', ['step' => 'any'])); ?>
                            <?php echo CHtml::error($model, 'max_value'); ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'step_size'); ?>
                            <?php echo CHtml::numberField($model->getModelName() . '[' . $fieldType->identifier . '][{index}][step_size]', $model->step_size, $model->getHtmlOptions('step_size', ['step' => 'any'])); ?>
                            <?php echo CHtml::error($model, 'step_size'); ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <?php echo CHtml::activeLabelEx($model, 'integer_only'); ?>
                            <?php echo CHtml::dropDownList($model->getModelName() . '[' . $fieldType->identifier . '][{index}][integer_only]', $model->integer_only, $model->getValuesTypeList(), $model->getHtmlOptions('integer_only')); ?>
                            <?php echo CHtml::error($model, 'integer_only'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="pull-right">
                    <a href="javascript:;" class="btn btn-danger btn-flat btn-remove-number-field" data-field-id="0" data-message="<?php echo t('survey_fields', 'Are you sure you want to remove this field? There is no coming back from this after you save the changes.'); ?>"><?php echo IconHelper::make('delete'); ?></a>
                </div>
                <div class="clearfix"><!-- --></div>
            </div>
        </div>
    </div>
</div>
