<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bonjour/index.html.twig */
class __TwigTemplate_cda409d0de6b2e7743ceb1501e98faa7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonjour/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bonjour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bonjour/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<!-- Marketing messaging and featurettes
\t  ================================================== -->
\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t<div
\t\tclass=\"container marketing\"> <!-- Three columns of text below the carousel -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>And lastly this, the third column of representative placeholder content.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t</div>
\t\t<!-- /.row -->


\t\t<!-- START THE FEATURETTES -->

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">First featurette heading.
\t\t\t\t\t<span class=\"text-muted\">It’ll blow your mind.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t\t<h2 class=\"featurette-heading\">Oh yeah, it’s that good.
\t\t\t\t\t<span class=\"text-muted\">See for yourself.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">And lastly, this one.
\t\t\t\t\t<span class=\"text-muted\">Checkmate.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr
\t\tclass=\"featurette-divider\">

\t<!-- /END THE FEATURETTES -->

\t</div>
\t<!-- /.container -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bonjour/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
\t<!-- Marketing messaging and featurettes
\t  ================================================== -->
\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t<div
\t\tclass=\"container marketing\"> <!-- Three columns of text below the carousel -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 140x140\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
\t\t\t\t</svg>

\t\t\t\t<h2>Heading</h2>
\t\t\t\t<p>And lastly this, the third column of representative placeholder content.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->
\t\t</div>
\t\t<!-- /.row -->


\t\t<!-- START THE FEATURETTES -->

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">First featurette heading.
\t\t\t\t\t<span class=\"text-muted\">It’ll blow your mind.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t\t<h2 class=\"featurette-heading\">Oh yeah, it’s that good.
\t\t\t\t\t<span class=\"text-muted\">See for yourself.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr class=\"featurette-divider\">

\t\t<div class=\"row featurette\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<h2 class=\"featurette-heading\">And lastly, this one.
\t\t\t\t\t<span class=\"text-muted\">Checkmate.</span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\">
\t\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<hr
\t\tclass=\"featurette-divider\">

\t<!-- /END THE FEATURETTES -->

\t</div>
\t<!-- /.container -->

{% endblock %}
", "bonjour/index.html.twig", "/Applications/MAMP/htdocs/ecommerce/templates/bonjour/index.html.twig");
    }
}
