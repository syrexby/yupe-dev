<?php
namespace yupe\widgets;

use Yii;

Yii::import('bootstrap.widgets.TbButtonColumn');

/**
 * Class CustomButtonColumn
 * @package yupe\widgets
 */
class CustomButtonColumn extends \TbButtonColumn
{
    /**
     * @var string
     */
    public $template = '{front_view} {view} {update} {delete}';
    /**
     * @var string the view button icon (defaults to 'eye-open').
     */
    public $viewButtonIcon = 'fa fa-fw fa-eye';

    /**
     * @var string the update button icon (defaults to 'pencil').
     */
    public $updateButtonIcon = 'fa fa-fw fa-pencil';

    /**
     * @var string the delete button icon (defaults to 'trash').
     */
    public $deleteButtonIcon = 'fa fa-fw fa-trash-o';

    /**
     * @var array
     */
    public $viewButtonOptions = ['class' => 'view btn btn-sm btn-default'];

    /**
     * @var array
     */
    public $deleteButtonOptions = ['class' => 'delete btn btn-sm btn-default'];

    /**
     * @var array
     */
    public $updateButtonOptions = ['class' => 'update btn btn-sm btn-default'];

    /**
     * @var array
     */
    public $htmlOptions = ['class' => 'grid-action-column'];

    /**
     * @var
     */
    public $frontViewButtonLabel;

    /**
     * @var string
     */
    public $frontViewButtonIcon = 'fa fa-fw fa-external-link-square';

    /**
     * @var
     */
    public $frontViewButtonUrl;

    /**
     * @var array
     */
    public $frontViewButtonOptions = ['class' => 'front-view btn btn-sm btn-default', 'target' => '_blank'];

    /**
     *
     */
    protected function initDefaultButtons()
    {
        parent::initDefaultButtons();

        $this->template = '<div class="btn-group">'.$this->template.'</div>';

        if ($this->frontViewButtonLabel === null) {
            $this->frontViewButtonLabel = Yii::t('zii', 'View');
        }

        if ($this->frontViewButtonUrl) {
            $this->buttons['front_view'] = [
                'label' => $this->frontViewButtonLabel,
                'url' => $this->frontViewButtonUrl,
                'options' => $this->frontViewButtonOptions,
                'icon' => $this->frontViewButtonIcon,
            ];
        } else {
            $this->buttons['front_view'] = [
                'visible' => function () {
                    return false;
                },
            ];
        }
    }
}
