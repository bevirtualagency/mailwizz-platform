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
 * @since 1.3.6.2
 */

/** @var Controller $controller */
$controller = controller();

/** @var string $pageHeading */
$pageHeading = (string)$controller->getData('pageHeading');

/** @var CustomerApiKey $model */
$model = $controller->getData('model');

/** @var CustomerApiKeyPermission[] $permissionsList */
$permissionsList = $controller->getData('permissionsList');

/** @var integer[] $selectedPermissions */
$selectedPermissions = $controller->getData('selectedPermissions');

/**
 * This hook gives a chance to prepend content or to replace the default view content with a custom content.
 * Please note that from inside the action callback you can access all the controller view
 * variables via {@CAttributeCollection $collection->controller->getData()}
 * In case the content is replaced, make sure to set {@CAttributeCollection $collection->add('renderContent', false)}
 * in order to stop rendering the default content.
 * @since 1.3.3.1
 */
hooks()->doAction('before_view_file_content', $viewCollection = new CAttributeCollection([
    'controller'    => $controller,
    'renderContent' => true,
]));

// and render if allowed
if ($viewCollection->itemAt('renderContent')) {
    /**
     * This hook gives a chance to prepend content before the active form or to replace the default active form entirely.
     * Please note that from inside the action callback you can access all the controller view variables
     * via {@CAttributeCollection $collection->controller->getData()}
     * In case the form is replaced, make sure to set {@CAttributeCollection $collection->add('renderForm', false)}
     * in order to stop rendering the default content.
     * @since 1.3.3.1
     */
    hooks()->doAction('before_active_form', $collection = new CAttributeCollection([
        'controller'    => $controller,
        'renderForm'    => true,
    ]));

    // and render if allowed
    if ($collection->itemAt('renderForm')) {
        /** @var CActiveForm $form */
        $form = $controller->beginWidget('CActiveForm'); ?>
        <div class="box box-primary borderless">
            <div class="box-header">
                <div class="pull-left">
                    <?php BoxHeaderContent::make(BoxHeaderContent::LEFT)
                        ->add('<h3 class="box-title">' . IconHelper::make('glyphicon-star') . html_encode((string)$pageHeading) . '</h3>')
                        ->render(); ?>
                </div>
                <div class="pull-right">
                    <?php BoxHeaderContent::make(BoxHeaderContent::RIGHT)
                        ->addIf(CHtml::link(IconHelper::make('create') . t('app', 'Create new'), ['api_keys/generate'], ['class' => 'btn btn-primary btn-flat', 'title' => t('app', 'Create new')]), !$model->getIsNewRecord())
                        ->add(CHtml::link(IconHelper::make('cancel') . t('app', 'Cancel'), ['api_keys/index'], ['class' => 'btn btn-primary btn-flat', 'title' => t('app', 'Cancel')]))
                        ->render(); ?>
                </div>
                <div class="clearfix"><!-- --></div>
            </div>
            <div class="box-body">
                <?php
                /**
                 * This hook gives a chance to prepend content before the active form fields.
                 * Please note that from inside the action callback you can access all the controller view variables
                 * via {@CAttributeCollection $collection->controller->getData()}
                 * @since 1.3.3.1
                 */
                hooks()->doAction('before_active_form_fields', new CAttributeCollection([
                    'controller'    => $controller,
                    'form'          => $form,
                ])); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'key'); ?>
                            <?php echo $form->textField($model, 'key', $model->fieldDecorator->getHtmlOptions('key', ['readonly' => true])); ?>
                            <?php echo $form->error($model, 'key'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'name'); ?>
                            <?php echo $form->textField($model, 'name', $model->fieldDecorator->getHtmlOptions('name')); ?>
                            <?php echo $form->error($model, 'name'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'description'); ?>
                            <?php echo $form->textField($model, 'description', $model->fieldDecorator->getHtmlOptions('description')); ?>
                            <?php echo $form->error($model, 'description'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
			                <?php echo $form->labelEx($model, 'enable_permissions'); ?>
			                <?php echo $form->dropDownList($model, 'enable_permissions', $model->getYesNoOptions(), $model->fieldDecorator->getHtmlOptions('enable_permissions')); ?>
			                <?php echo $form->error($model, 'enable_permissions'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'ip_whitelist'); ?>
                            <?php echo $form->textArea($model, 'ip_whitelist', $model->fieldDecorator->getHtmlOptions('ip_whitelist')); ?>
                            <?php echo $form->error($model, 'ip_whitelist'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'ip_blacklist'); ?>
                            <?php echo $form->textArea($model, 'ip_blacklist', $model->fieldDecorator->getHtmlOptions('ip_blacklist')); ?>
                            <?php echo $form->error($model, 'ip_blacklist'); ?>
                        </div>
                    </div>
                </div>
                <div class="row" id="api-key-permissions-list-wrapper" style="display: none">
                    <div class="col-lg-12">
                        <div class="box-header">
                            <div class="pull-left">
			                    <?php BoxHeaderContent::make(BoxHeaderContent::LEFT)
			                        ->add('<h3 class="box-title">' . t('api_keys', 'Permissions') . '</h3>')
			                        ->render(); ?>
                            </div>
                            <div class="pull-right">
			                    <?php BoxHeaderContent::make(BoxHeaderContent::RIGHT)
			                        ->add(CHtml::link(t('app', 'Select all'), 'javascript:', ['class' => 'btn btn-primary btn-flat select-all', 'title' => t('app', 'Select all')]))
			                        ->add(CHtml::link(t('app', 'Select none'), 'javascript:', ['class' => 'btn btn-primary btn-flat select-none', 'title' => t('app', 'Select none')]))
			                        ->render(); ?>
                            </div>
                            <div class="clearfix"><!-- --></div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4">
				                    <?php foreach ($permissionsList as $index => $permission) { ?>
                                    <div class="col-lg-12">
					                    <?php echo CHtml::checkBox('permissions[]', in_array($permission->permission_id, $selectedPermissions), [
                                            'id'    => 'permissiond-id-' . (int) $permission->permission_id,
                                            'value' => (int) $permission->permission_id,
                                        ]); ?>
					                    <?php echo CHtml::label(t('api_keys', $permission->name), 'permissiond-id-' . (int) $permission->permission_id); ?>
                                    </div>
				                    <?php if (($index + 1) % ceil((count($permissionsList) / 3)) === 0) { ?></div><div class="col-lg-4"><?php } ?>
				                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                /**
                 * This hook gives a chance to append content after the active form fields.
                 * Please note that from inside the action callback you can access all the controller view variables
                 * via {@CAttributeCollection $collection->controller->getData()}
                 * @since 1.3.3.1
                 */
                hooks()->doAction('after_active_form_fields', new CAttributeCollection([
                    'controller'    => $controller,
                    'form'          => $form,
                ])); ?>
                <div class="clearfix"><!-- --></div>
            </div>
            <div class="box-footer">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-flat"><?php echo IconHelper::make('save') . t('app', 'Save changes'); ?></button>
                </div>
                <div class="clearfix"><!-- --></div>
            </div>
        </div>
        <?php
        $controller->endWidget();
    }
    /**
     * This hook gives a chance to append content after the active form.
     * Please note that from inside the action callback you can access all the controller view variables
     * via {@CAttributeCollection $collection->controller->getData()}
     * @since 1.3.3.1
     */
    hooks()->doAction('after_active_form', new CAttributeCollection([
        'controller'      => $controller,
        'renderedForm'    => $collection->itemAt('renderForm'),
    ]));
}
/**
 * This hook gives a chance to append content after the view file default content.
 * Please note that from inside the action callback you can access all the controller view
 * variables via {@CAttributeCollection $collection->controller->getData()}
 * @since 1.3.3.1
 */
hooks()->doAction('after_view_file_content', new CAttributeCollection([
    'controller'        => $controller,
    'renderedContent'   => $viewCollection->itemAt('renderContent'),
]));
