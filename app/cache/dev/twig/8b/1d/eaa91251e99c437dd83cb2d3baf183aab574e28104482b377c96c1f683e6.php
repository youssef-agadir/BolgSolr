<?php

/* NelmioSolariumBundle:DataCollector:solarium.html.twig */
class __TwigTemplate_8b1deaa91251e99c437dd83cb2d3baf183aab574e28104482b377c96c1f683e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"28\" height=\"28\" alt=\"Solr\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAACXBIWXMAAAsSAAALEgHS3X78AAAAGXRFWHRDb21tZW50AENyZWF0ZWQgd2l0aCBHSU1QV4EOFwAABQlJREFUSInlVm9oVlUcfn733Hvfe8dUNLSVM23kHzD/jUEQee/mcI5lLpVY4pAZ+YKVpG5p0SoGYX1I/LNPKyLcm5CMTQl6pfy3+5pYJJhY6cq/CEK6pmt7955zzz339CEnLjftix+i59OPwznPw/N7zo9zSGuNBwnjgbL/f1BRUWF4nlcIAJ7nFXmeN+3fnr1nBgsWLCgoKyv7UQihiOgZACCi8wC6fN/Xvu+XDO71PG9YLnO4xcrKyscNw/hDSlmhtZ5jGIY6dOjQF6WlpWviOB7cti8IghO+75cCqA+C4Ll/5WDJkiXFpmleSKfTf1qWVWxZFkzT3AUAjLH3GGMgot4gCJaWl5fna62PAFjsed5l3/fH3deBaZrpwdq27flxHMMwjHeqqqoqlVITlVIgohIAkFJeICLcmqVCABMB9AzrYOXKlQQAiUSiO5FIXLhVFycSifP79u27alnWh5ZlwbKs9YcPHz5XXl7+LRGN11qDiE5nMhkWBMFp3/f9OwVosKirq3s3juPtjLGDWuvu/Pz8pb29vRxAbRRFx6MoOq+U6uzo6Cirqqr6OIqiNUopRFH0SRAESQDwPO8rAFVENCMIgq4hDmzbbsrPz5/gOM5l13UvSinnOY6DVCq127btNtu2446OjrLly5cnTdNcY5omTNNcHQRBsrS0dL7v+5qIqm7RvXlXBq7r7ieihUR0CcC1OI7nxHGcqampsRKJRDFjbE5tbe0sKWWL1joCMCudTp9duHDhTinlOq21pr8BALevGgOATZs2PWTbdhdjbIVlWccZYzcYY4tt237ddd3PDcNob2lp2V1SUvI7Ef26Z8+eCbNnz9ZFRUW/aK0XDbZba70FwLOZTKZtSMiWZTUxxk64rjshLy/vlOu6N1zXJcuyrjmOM725uXnzunXrtG3bu1Op1PTa2tr1ALoZY1MYY1cMw1jd2dlJmUzmbcMwxvq+v31IyE1NTYWmab5mmuZpxthZpZSjtZ4bhuFjkydPbjxz5swZKeUHW7du/TSZTJ4UQswNw/BYGIab29vbjy1btizR29v7UhRFDVrrIgDIZDJ0O4Nx48b1SymPWpZ17lYTx8ZxHDDGCq5cufK+67qLGGPTN2zYoDnnX+7atWseAKxYseLp6urq73K53FNEhDtm4jZMAAjDMM9xnBujRo26umrVqr5UKnUhm83mA3AYY5/19/e/obW+uG3bNqqvr384mUzu55xXCiFgGAaISBIRJ6LfABwnomN3zcFwaG1tHdPd3V1CRD/fvHnzFc75y5zzBOc8LYQ4LoQ4xTm/uHfv3qsjcdxTAAB27tw5NZvNPqGU+qGxsbG7oaFhTC6Xm8I5L8zlcpOEEIVhGD4ShmGBlHKCUmomgOeDIPjmvgJtbW3G9evXi7LZ7JxcLrcol8tN45w/yjkvEEKM4pxDCAEhBKSUkFJCKdUVBMGMIRmMhJ6eHqaUGq2UKlBKndVa7wbw09SpU3s2btyoAaCmpqYgDMO5AKZrrZ8E8NadHPcUADBRSlmglLrkOM73Qoj1cRwf7OrqMuvq6vo458fCMDyote5USh09cuRI9p8EI75ozc3NxQMDA6OFEOOJ6GpfX99JKeX5HTt2WEQ0M47jr7XWlXEcfxTH8QkimjQcz4gCSqlTURSZYRheHxgYeHXLli2TlFJr1q5dKznn1a2trS8AyAPwYjqdpgMHDpy9TzceDOg//7P7C7sSbgbuqYhJAAAAAElFTkSuQmCC\"/>
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totaltime") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Solr Queries</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totaltime") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "<span class=\"label\">
    <span class=\"icon\"><img alt=\"Solr\" src=\"data:image/png;base64,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\"/></span>
    <strong>Solr</strong>
    <span class=\"count\">
        <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount"), "html", null, true);
        echo "</span>
        <span>";
        // line 30
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totaltime") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries"))) {
            // line 37
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 41
            echo "        <ul class=\"alt\">
        ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 43
                echo "            <li>
                <h2>Request ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " (<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "base_uri"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "request"), "uri"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "request"), "uri"), "html", null, true);
                echo "</a>)</h2>
                <div>
                    <h3>Params</h3>
                    <table style=\"width:45%\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Key</th>
                                <th scope=\"col\">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                    ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "request"), "params"));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 56
                    echo "                            <tr>
                                <td><b>";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "</b></td>
                                ";
                    // line 58
                    if (twig_get_array_keys_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                        // line 59
                        echo "                                <td>";
                        echo twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "<br />");
                        echo "</td>
                                ";
                    } else {
                        // line 61
                        echo "                                <td>";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</td>
                                ";
                    }
                    // line 63
                    echo "                            </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                        </tbody>
                    </table>

                    <h3>Response</h3>
                    <code>
                        ";
                // line 70
                if ($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "response")) {
                    // line 71
                    echo "                            HTTP-Result: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "response"), "statuscode"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, sprintf("%0.4f", $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "duration")), "html", null, true);
                    echo " ms)<br/>
                            ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "response"), "body"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 74
                    echo "                            Request failed, no response logged
                        ";
                }
                // line 76
                echo "                    </code>
                </div>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "NelmioSolariumBundle:DataCollector:solarium.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  137 => 44,  56 => 11,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  543 => 206,  539 => 205,  525 => 195,  523 => 194,  518 => 193,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  370 => 135,  317 => 116,  306 => 113,  294 => 109,  250 => 100,  239 => 95,  218 => 82,  212 => 78,  205 => 76,  169 => 59,  160 => 56,  148 => 53,  142 => 49,  107 => 33,  273 => 96,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  230 => 80,  224 => 79,  219 => 76,  217 => 75,  179 => 69,  143 => 55,  71 => 18,  209 => 74,  193 => 73,  187 => 70,  154 => 58,  149 => 51,  122 => 37,  112 => 35,  103 => 31,  86 => 24,  57 => 11,  48 => 8,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 210,  551 => 209,  546 => 207,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  514 => 192,  297 => 200,  280 => 103,  271 => 190,  258 => 187,  251 => 182,  93 => 27,  85 => 23,  77 => 20,  51 => 10,  34 => 5,  31 => 4,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 197,  527 => 416,  522 => 406,  517 => 404,  202 => 94,  199 => 71,  196 => 92,  182 => 70,  173 => 68,  158 => 80,  136 => 71,  68 => 30,  62 => 12,  28 => 3,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 134,  384 => 132,  382 => 131,  377 => 129,  374 => 128,  368 => 134,  365 => 133,  362 => 124,  359 => 123,  356 => 122,  350 => 120,  347 => 125,  341 => 117,  333 => 121,  324 => 112,  313 => 110,  308 => 109,  305 => 108,  285 => 105,  249 => 181,  237 => 91,  234 => 90,  221 => 77,  201 => 74,  186 => 72,  183 => 71,  180 => 70,  177 => 69,  161 => 58,  159 => 61,  135 => 53,  133 => 42,  128 => 42,  117 => 42,  114 => 41,  95 => 28,  78 => 22,  75 => 18,  58 => 25,  44 => 9,  204 => 72,  188 => 65,  174 => 74,  171 => 64,  167 => 58,  138 => 54,  125 => 38,  121 => 50,  118 => 49,  104 => 31,  87 => 24,  49 => 14,  46 => 7,  27 => 3,  91 => 27,  88 => 24,  63 => 14,  389 => 160,  386 => 159,  378 => 137,  371 => 127,  367 => 155,  363 => 153,  358 => 151,  353 => 121,  345 => 124,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 115,  281 => 98,  276 => 102,  274 => 96,  269 => 94,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  235 => 94,  232 => 89,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 73,  175 => 61,  170 => 84,  166 => 61,  163 => 57,  155 => 55,  152 => 54,  144 => 49,  127 => 35,  109 => 34,  94 => 30,  82 => 22,  76 => 21,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 17,  69 => 16,  54 => 10,  47 => 8,  42 => 7,  40 => 11,  37 => 6,  22 => 1,  164 => 60,  157 => 56,  145 => 74,  139 => 48,  131 => 44,  120 => 38,  115 => 39,  111 => 47,  108 => 37,  106 => 33,  101 => 30,  98 => 45,  92 => 27,  83 => 33,  80 => 20,  74 => 14,  66 => 14,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 158,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 140,  387 => 164,  380 => 158,  373 => 156,  361 => 131,  355 => 150,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 120,  325 => 129,  323 => 117,  320 => 127,  315 => 111,  312 => 114,  303 => 122,  300 => 110,  298 => 120,  289 => 196,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  246 => 99,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 76,  207 => 76,  203 => 78,  200 => 72,  197 => 71,  194 => 68,  191 => 77,  185 => 75,  181 => 63,  178 => 59,  176 => 64,  172 => 68,  168 => 62,  165 => 83,  162 => 59,  156 => 55,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 43,  130 => 41,  123 => 41,  119 => 42,  116 => 41,  113 => 48,  105 => 36,  102 => 35,  99 => 31,  96 => 37,  90 => 29,  84 => 25,  81 => 24,  73 => 17,  70 => 18,  67 => 17,  64 => 15,  59 => 12,  53 => 10,  45 => 7,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
