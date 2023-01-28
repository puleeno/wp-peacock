<?php
namespace Peacock\Core\Abstracts\Resolver;

use Peacock\Core\Interfaces\Resolver\TemplateTagResolverInterface;

abstract class TemplateTagResolverAbstract implements TemplateTagResolverInterface
{
    /**
     * @var string
     */
    protected $template;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $sep;

    /**
     * @var string
     */
    protected $siteName;

    public function __construct($template, $title = null, $sep = null, $siteName = null)
    {
        $this->setTemplate($template);

        if (!is_null($title)) {
            $this->setTitle($title);
        }

        if (!is_null($sep)) {
            $this->setSep($sep);
        }

        if (!is_null($siteName)) {
            $this->setSiteName($siteName);
        }
    }

    /**
     * @param string $template
     *
     * @return static
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return static
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $sep
     *
     * @return static
     */
    public function setSep($sep)
    {
        $this->sep = $sep;

        return $this;
    }

    /**
     * @param string $siteName
     *
     * @return static
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSep()
    {
        return $this->sep;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }
}
