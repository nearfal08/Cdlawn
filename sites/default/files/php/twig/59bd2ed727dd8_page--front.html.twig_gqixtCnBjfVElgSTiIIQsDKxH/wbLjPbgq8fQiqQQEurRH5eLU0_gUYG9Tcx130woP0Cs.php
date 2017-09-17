<?php

/* themes/nexus/templates/page--front.html.twig */
class __TwigTemplate_3611099d0d1d6f91c6ee88f0419d7ecaba0fad66ee85cdd4fe2cfb18d3e8d242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5, "set" => 94);
        $filters = array("striptags" => 24, "t" => 27);
        $functions = array("attach_library" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('striptags', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "<div id=\"page\">
    <header id=\"masthead\" class=\"site-header container smaller-container\" role=\"banner\">
        <div class=\"row\">
            ";
        // line 5
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 6
            echo "            <div id=\"logo\" class=\"site-branding col-sm-6\">
                ";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 10
        echo "            <div class=\"col-sm-6 mainmenu\">
                <div class=\"mobilenavi\"></div>
                <nav id=\"navigation\" role=\"navigation\">
                    <div id=\"main-menu\">
                        ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array())) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
            echo " ";
        }
        // line 15
        echo "                    </div>
                </nav>
            </div>
        </div>
    </header>
    ";
        // line 20
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo " ";
            if ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null)) {
                // line 21
                echo "    <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
            <li>
                <img src=\"";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/mowing_slide.jpg"), "html", null, true));
                echo "\" /> ";
                if (((isset($context["slide1_head"]) ? $context["slide1_head"] : null) || (isset($context["slide1_desc"]) ? $context["slide1_desc"] : null))) {
                    echo " ";
                    if ((isset($context["slide1_head"]) ? $context["slide1_head"] : null)) {
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                        echo " ";
                    }
                    // line 25
                    echo "                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">";
                    // line 26
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_desc"]) ? $context["slide1_desc"] : null)), "html", null, true));
                    echo "
                    <a class=\"frmore\" href=\"";
                    // line 27
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_url"]) ? $context["slide1_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
                </div>
                ";
                }
                // line 30
                echo "            </li>
            <li>
                <img src=\"";
                // line 32
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/fall_cleanup_slide.jpg"), "html", null, true));
                echo "\" /> ";
                if (((isset($context["slide2_head"]) ? $context["slide2_head"] : null) || (isset($context["slide2_desc"]) ? $context["slide2_desc"] : null))) {
                    echo " ";
                    if ((isset($context["slide2_head"]) ? $context["slide2_head"] : null)) {
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_head"]) ? $context["slide2_head"] : null)), "html", null, true));
                        echo " ";
                    }
                    // line 33
                    echo "                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">";
                    // line 34
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_head"]) ? $context["slide2_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_desc"]) ? $context["slide2_desc"] : null)), "html", null, true));
                    echo "
                    <a class=\"frmore\" href=\"";
                    // line 35
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_url"]) ? $context["slide2_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
                </div>
                ";
                }
                // line 38
                echo "            </li>
            <li>
                <img src=\"";
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/bush_cutting_slide.jpg"), "html", null, true));
                echo "\" /> ";
                if (((isset($context["slide3_head"]) ? $context["slide3_head"] : null) || (isset($context["slide3_desc"]) ? $context["slide3_desc"] : null))) {
                    echo " ";
                    if ((isset($context["slide3_head"]) ? $context["slide3_head"] : null)) {
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_head"]) ? $context["slide3_head"] : null)), "html", null, true));
                        echo " ";
                    }
                    // line 41
                    echo "                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">";
                    // line 42
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_head"]) ? $context["slide3_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_desc"]) ? $context["slide3_desc"] : null)), "html", null, true));
                    echo "
                    <a class=\"frmore\" href=\"";
                    // line 43
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_url"]) ? $context["slide3_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
                </div>
                ";
                }
                // line 46
                echo "            </li>
            <li>
                <img src=\"";
                // line 48
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/snow_removal_slide.jpg"), "html", null, true));
                echo "\" /> ";
                if (((isset($context["slide4_head"]) ? $context["slide4_head"] : null) || (isset($context["slide4_desc"]) ? $context["slide4_desc"] : null))) {
                    echo " ";
                    if ((isset($context["slide4_head"]) ? $context["slide4_head"] : null)) {
                        echo " ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide4_head"]) ? $context["slide4_head"] : null)), "html", null, true));
                        echo " ";
                    }
                    // line 49
                    echo "                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">";
                    // line 50
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide4_head"]) ? $context["slide4_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide4_desc"]) ? $context["slide4_desc"] : null)), "html", null, true));
                    echo "
                    <a class=\"frmore\" href=\"";
                    // line 51
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide4_url"]) ? $context["slide4_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
                </div>
                ";
                }
                // line 54
                echo "            </li>
        </ul>
        <!-- /slides -->
        <div class=\"doverlay\"></div>
    </div>
    ";
            }
            // line 59
            echo " ";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()))) {
            // line 60
            echo "    <div id=\"preface-area\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                ";
            // line 63
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 64
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 65
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 67
            echo " ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) {
                // line 68
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 69
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 71
            echo " ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) {
                // line 72
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 76
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 79
        echo " ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 80
            echo "    <div id=\"highlighted-block\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 90
        echo "
    <div id=\"main-content\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                ";
        // line 94
        $context["primary_col"] = 12;
        // line 95
        echo "                <div id=\"primary\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("content-area col-sm-" . (isset($context["primary_col"]) ? $context["primary_col"] : null)), "html", null, true));
        echo "\">
                    <section id=\"content\" role=\"main\" class=\"clearfix\">
                        <div id=\"content-wrap\">
                            ";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 106
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 107
            echo "    <div id=\"footer-block\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
            // line 111
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 116
        echo " ";
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 117
            echo "    <div id=\"bottom\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                ";
            // line 120
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 121
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 122
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 124
            echo " ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 125
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 126
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 128
            echo " ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 129
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 132
            echo " ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 133
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
                    ";
                // line 134
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>
                ";
            }
            // line 137
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 141
        echo "    <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"fcred col-sm-12\">
                    ";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copyright")));
        echo " &copy; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["this_year"]) ? $context["this_year"] : null), "html", null, true));
        echo ", <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\">C&#38;D Lawncare</a>.<a href=\"/sitemap\">&nbsp;&nbsp;Site Map</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href=\"/contact-us\">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 145,  404 => 141,  398 => 137,  392 => 134,  387 => 133,  384 => 132,  378 => 130,  373 => 129,  370 => 128,  364 => 126,  359 => 125,  356 => 124,  350 => 122,  345 => 121,  343 => 120,  338 => 117,  335 => 116,  326 => 111,  320 => 107,  318 => 106,  307 => 98,  300 => 95,  298 => 94,  292 => 90,  283 => 84,  277 => 80,  274 => 79,  268 => 76,  262 => 73,  257 => 72,  254 => 71,  248 => 69,  243 => 68,  240 => 67,  234 => 65,  229 => 64,  227 => 63,  222 => 60,  217 => 59,  209 => 54,  201 => 51,  195 => 50,  192 => 49,  182 => 48,  178 => 46,  170 => 43,  164 => 42,  161 => 41,  151 => 40,  147 => 38,  139 => 35,  133 => 34,  130 => 33,  120 => 32,  116 => 30,  108 => 27,  102 => 26,  99 => 25,  89 => 24,  84 => 21,  78 => 20,  71 => 15,  65 => 14,  59 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{# /** * @file * Bartik's theme implementation to display a single page. * * The doctype, html, head and body tags are not in this template. Instead they * can be found in the html.html.twig template normally located in the * core/modules/system directory. * * Available variables: * * General utility variables: * - base_path: The base URL path of the Drupal installation. Will usually be * \"/\" unless you have installed Drupal in a sub-directory. * - is_front: A flag indicating if the current page is the front page. * - logged_in: A flag indicating if the user is registered and signed in. * - is_admin: A flag indicating if the user has permission to access * administration pages. * * Site identity: * - front_page: The URL of the front page. Use this instead of base_path when * linking to the front page. This includes the language domain or prefix. * * Page content (in order of occurrence in the default page.html.twig): * - node: Fully loaded node, if there is an automatically-loaded node * associated with the page and the node ID is the second argument in the * page's path (e.g. node/12345 and node/12345/revisions, but not * comment/reply/12345). * * Regions: * - page.header: Items for the Header region. * - page.main_navigation: Items for the Main Navigation region. * - page.preface_first: Items for the Preface First region. * - page.preface_second: Items for the Preface Second region. * - page.preface_third: Items for the Preface Third region. * - page.highlighted: Items for the Highlighted region. * - sidebar_first: Items for the First Sidebar region. * - content_top: Items for the Content Top region. * - help: Items for the Help region. * - content: Items for the Content region. * - footer: Items for the Footer region. * - footer_first: Items for the First Bottom region. * - footer_second: Items for the Second Bottom region. * - footer_third: Items for the Third Bottom region. * - footer_fourth: Items for the Fourth Bottom region. * * @see template_preprocess_page() * @see html.html.twig */ #}
<div id=\"page\">
    <header id=\"masthead\" class=\"site-header container smaller-container\" role=\"banner\">
        <div class=\"row\">
            {% if page.header %}
            <div id=\"logo\" class=\"site-branding col-sm-6\">
                {{ page.header }}
            </div>
            {% endif %}
            <div class=\"col-sm-6 mainmenu\">
                <div class=\"mobilenavi\"></div>
                <nav id=\"navigation\" role=\"navigation\">
                    <div id=\"main-menu\">
                        {% if page.main_navigation %} {{ page.main_navigation }} {% endif %}
                    </div>
                </nav>
            </div>
        </div>
    </header>
    {% if is_front %} {{ attach_library('nexus/slider-js') }} {% if slideshow_display %}
    <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
            <li>
                <img src=\"{{ base_path ~ 'themes/nexus/assets/images/mowing_slide.jpg' }}\" /> {% if slide1_head or slide1_desc %} {% if slide1_head %} {{ slide1_head|striptags }} {% endif %}
                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">{{ slide1_head|striptags }}</h2>{{ slide1_desc|striptags }}
                    <a class=\"frmore\" href=\"{{ slide1_url|striptags }}\">{{ 'Read More'|t }}</a>
                </div>
                {% endif %}
            </li>
            <li>
                <img src=\"{{ base_path ~ 'themes/nexus/assets/images/fall_cleanup_slide.jpg' }}\" /> {% if slide2_head or slide2_desc %} {% if slide2_head %} {{ slide2_head|striptags }} {% endif %}
                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">{{ slide2_head|striptags }}</h2>{{ slide2_desc|striptags }}
                    <a class=\"frmore\" href=\"{{ slide2_url|striptags }}\">{{ 'Read More'|t }}</a>
                </div>
                {% endif %}
            </li>
            <li>
                <img src=\"{{ base_path ~ 'themes/nexus/assets/images/bush_cutting_slide.jpg' }}\" /> {% if slide3_head or slide3_desc %} {% if slide3_head %} {{ slide3_head|striptags }} {% endif %}
                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">{{ slide3_head|striptags }}</h2>{{ slide3_desc|striptags }}
                    <a class=\"frmore\" href=\"{{ slide3_url|striptags }}\">{{ 'Read More'|t }}</a>
                </div>
                {% endif %}
            </li>
            <li>
                <img src=\"{{ base_path ~ 'themes/nexus/assets/images/snow_removal_slide.jpg' }}\" /> {% if slide4_head or slide4_desc %} {% if slide4_head %} {{ slide4_head|striptags }} {% endif %}
                <div class=\"flex-caption\">
                    <h2 class=\"header_shadow\">{{ slide4_head|striptags }}</h2>{{ slide4_desc|striptags }}
                    <a class=\"frmore\" href=\"{{ slide4_url|striptags }}\">{{ 'Read More'|t }}</a>
                </div>
                {% endif %}
            </li>
        </ul>
        <!-- /slides -->
        <div class=\"doverlay\"></div>
    </div>
    {% endif %} {% endif %} {% if page.preface_first or page.preface_second or page.preface_third %}
    <div id=\"preface-area\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                {% if page.preface_first %}
                <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
                    {{ page.preface_first }}
                </div>
                {% endif %} {% if page.preface_second %}
                <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
                    {{ page.preface_second }}
                </div>
                {% endif %} {% if page.preface_third %}
                <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
                    {{ page.preface_third }}
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% endif %} {% if page.highlighted %}
    <div id=\"highlighted-block\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {{ page.highlighted }}
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    <div id=\"main-content\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                {% set primary_col = 12 %}
                <div id=\"primary\" class=\"{{ 'content-area col-sm-' ~ primary_col }}\">
                    <section id=\"content\" role=\"main\" class=\"clearfix\">
                        <div id=\"content-wrap\">
                            {{ page.content }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {% if page.footer %}
    <div id=\"footer-block\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {{ page.footer }}
                </div>
            </div>
        </div>
    </div>
    {% endif %} {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
    <div id=\"bottom\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                {% if page.footer_first %}
                <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
                    {{ page.footer_first }}
                </div>
                {% endif %} {% if page.footer_second %}
                <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
                    {{ page.footer_second }}
                </div>
                {% endif %} {% if page.footer_third %}
                <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
                    {{ page.footer_third }}
                </div>
                {% endif %} {% if page.footer_fourth %}
                <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
                    {{ page.footer_fourth }}
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% endif %}
    <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
        <div class=\"container smaller-container\">
            <div class=\"row\">
                <div class=\"fcred col-sm-12\">
                    {{ \"Copyright\"|t }} &copy; {{ this_year }}, <a href=\"{{ front_page }}\">C&#38;D Lawncare</a>.<a href=\"/sitemap\">&nbsp;&nbsp;Site Map</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><a href=\"/contact-us\">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>
</div>
";
    }
}
