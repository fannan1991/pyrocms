<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/posts-module/resources/views/posts/view.twig */
class __TwigTemplate_671883249d9eda9184c83fb3f6f45b07bb04bcb0fe3241ad9e81f3c5f3ddd2c5 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'post' => array($this, 'block_post'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["post"] ?? null), "type", array()), "theme_layout", array()), "key", array()), "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/posts/view.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"posts\">
        <div class=\"container\">
            <article id=\"post\">

                <header>

                    <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

                    <div class=\"meta\">

                    <span class=\"author\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "display_name", array()), "html", null, true);
        echo "
                    </span>

                        <time class=\"date\" datetime=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "publish_at", array()), "iso", array()), "html", null, true);
        echo "\">
                            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "publish_at", array()), "format", array(0 => call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::datetime.date_format"))), "method"), "html", null, true);
        echo "
                        </time>

                        ";
        // line 22
        if ($this->getAttribute(($context["post"] ?? null), "category", array())) {
            // line 23
            echo "                            <span class=\"category\">
                            &mdash; ";
            // line 24
            echo call_user_func_array($this->env->getFunction('html_link')->getCallable(), array("link", $this->getAttribute($this->getAttribute(($context["post"] ?? null), "category", array()), "route", array(0 => "view"), "method"), $this->getAttribute($this->getAttribute(($context["post"] ?? null), "category", array()), "name", array())));
            echo "
                        </span>
                        ";
        }
        // line 27
        echo "
                        ";
        // line 28
        if ($this->getAttribute(($context["post"] ?? null), "tags", array())) {
            // line 29
            echo "                            <div class=\"tags\">
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["post"] ?? null), "tags", array()), "value", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("route", "anomaly.module.posts::tags.view", array("tag" => $context["tag"]))), "html", null, true);
                echo "\"
                                       class=\"label label-info list-inline-item\">
                                        ";
                // line 33
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </div>
                        ";
        }
        // line 38
        echo "
                    </div>

                </header>

                <br>
                <br>

                <div class=\"content\">
                    ";
        // line 47
        $this->displayBlock('post', $context, $blocks);
        // line 50
        echo "                </div>

            </article>
        </div>
    </div>
";
    }

    // line 47
    public function block_post($context, array $blocks = array())
    {
        // line 48
        echo "                        ";
        echo ($context["content"] ?? null);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/posts/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  127 => 47,  118 => 50,  116 => 47,  105 => 38,  101 => 36,  92 => 33,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  74 => 27,  68 => 24,  65 => 23,  63 => 22,  57 => 19,  53 => 18,  47 => 15,  39 => 10,  31 => 4,  28 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends post.type.theme_layout.key %}

{% block content %}
    <div id=\"posts\">
        <div class=\"container\">
            <article id=\"post\">

                <header>

                    <h1>{{ post.title }}</h1>

                    <div class=\"meta\">

                    <span class=\"author\">
                        {{ post.author.display_name }}
                    </span>

                        <time class=\"date\" datetime=\"{{ post.publish_at.iso }}\">
                            {{ post.publish_at.format(config_get('streams::datetime.date_format')) }}
                        </time>

                        {% if post.category %}
                            <span class=\"category\">
                            &mdash; {{ html_link(post.category.route('view'), post.category.name) }}
                        </span>
                        {% endif %}

                        {% if post.tags %}
                            <div class=\"tags\">
                                {% for tag in post.tags.value %}
                                    <a href=\"{{ url_route('anomaly.module.posts::tags.view', {'tag': tag}) }}\"
                                       class=\"label label-info list-inline-item\">
                                        {{ tag }}
                                    </a>
                                {% endfor %}
                            </div>
                        {% endif %}

                    </div>

                </header>

                <br>
                <br>

                <div class=\"content\">
                    {% block post %}
                        {{ content|raw }}
                    {% endblock %}
                </div>

            </article>
        </div>
    </div>
{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/posts/view.twig", "");
    }
}
