<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

use Cake\Core\Configure;
use Cake\Http\Response;
use Cake\View\StringTemplateTrait;

/**
 * MyLink helper
 */
class MyLinkHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    use StringTemplateTrait;
    
    /**
     * List of helpers used by this helper
     *
     * @var array
     */
    public $helpers = ['Url'];

    /**
     * Reference to the Response object
     *
     * @var \Cake\Http\Response
     */
    public $response;

    protected $_defaultConfig = [
        'templates' => [
            'myLink' => '<a href="{{url}}"{{attrs}}>{{content}} <i class="{{icon}}"></i></a>'
        ]
    ];
    public function myLink($title, $url = null, array $options = [])
    {
        $escapeTitle = true;
        if ($url !== null) {
            $url = $this->Url->build($url, $options);
            unset($options['fullBase']);
        } else {
            $url = $this->Url->build($title);
            $title = htmlspecialchars_decode($url, ENT_QUOTES);
            $title = h(urldecode($title));
            $escapeTitle = false;
        }

        if (isset($options['escapeTitle'])) {
            $escapeTitle = $options['escapeTitle'];
            unset($options['escapeTitle']);
        } elseif (isset($options['escape'])) {
            $escapeTitle = $options['escape'];
        }

        if ($escapeTitle === true) {
            $title = h($title);
        } elseif (is_string($escapeTitle)) {
            $title = htmlentities($title, ENT_QUOTES, $escapeTitle);
        }

        $confirmMessage = null;
        if (isset($options['confirm'])) {
            $confirmMessage = $options['confirm'];
            unset($options['confirm']);
        }
        if ($confirmMessage) {
            $options['onclick'] = $this->_confirm($confirmMessage, 'return true;', 'return false;', $options);
        }

        $templater = $this->templater();

        return $templater->format('myLink', [
            'url' => $url,
            'attrs' => $templater->formatAttributes($options),
            'content' => $title,
            'icon' => $options['icon']
        ]);
    }

}
