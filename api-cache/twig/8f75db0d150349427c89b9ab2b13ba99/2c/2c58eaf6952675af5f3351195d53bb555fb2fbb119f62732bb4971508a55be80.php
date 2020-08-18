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

/* hooks/hooks.html.twig */
class __TwigTemplate_790931f4e648927fe9f6a9cf8703aec274ec9c9f9cd86a336d2dac50fc0aa656 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "hooks/hooks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<article class=\"phpdocumentor-element\">
    <h2 class=\"phpdocumentor-content__title\">Action and Filter Hook Reference</h2>
    <p>This is simply a list of action and filter hooks found within WooCommerce files. View the source to see supported params and usage.</p>

    <div class=\"hooks-reference\">
        <h2 id=\"hooks-template-files\">Template Files</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_account_content\">woocommerce_account_content</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_account_dashboard\">woocommerce_account_dashboard</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_account_downloads_column_\$COLUMN_ID\">woocommerce_account_downloads_column_\$COLUMN_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_account_navigation\">woocommerce_account_navigation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_account_payment_methods_column_\$COLUMN_ID\">woocommerce_account_payment_methods_column_\$COLUMN_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment-methods.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_account_downloads\">woocommerce_after_account_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_account_navigation\">woocommerce_after_account_navigation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">navigation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_account_orders\">woocommerce_after_account_orders</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_account_payment_methods\">woocommerce_after_account_payment_methods</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment-methods.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_available_downloads\">woocommerce_after_available_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">downloads.php, my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_cart\">woocommerce_after_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_cart_contents\">woocommerce_after_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_cart_item_name\">woocommerce_after_cart_item_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_cart_table\">woocommerce_after_cart_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_cart_totals\">woocommerce_after_cart_totals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_checkout_billing_form\">woocommerce_after_checkout_billing_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-billing.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_checkout_form\">woocommerce_after_checkout_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_checkout_registration_form\">woocommerce_after_checkout_registration_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-billing.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_checkout_shipping_form\">woocommerce_after_checkout_shipping_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_customer_login_form\">woocommerce_after_customer_login_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_edit_account_address_form\">woocommerce_after_edit_account_address_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_edit_account_form\">woocommerce_after_edit_account_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_edit_address_form_\$LOAD_ADDRESS\">woocommerce_after_edit_address_form_\$LOAD_ADDRESS</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_lost_password_form\">woocommerce_after_lost_password_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-lost-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_main_content\">woocommerce_after_main_content</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php, single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_mini_cart\">woocommerce_after_mini_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_my_account\">woocommerce_after_my_account</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_order_notes\">woocommerce_after_order_notes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_reset_password_form\">woocommerce_after_reset_password_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_shipping_calculator\">woocommerce_after_shipping_calculator</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_shipping_rate\">woocommerce_after_shipping_rate</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_shop_loop\">woocommerce_after_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_shop_loop_item\">woocommerce_after_shop_loop_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_shop_loop_item_title\">woocommerce_after_shop_loop_item_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_single_product\">woocommerce_after_single_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_single_product_summary\">woocommerce_after_single_product_summary</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_subcategory\">woocommerce_after_subcategory</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product_cat.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_after_subcategory_title\">woocommerce_after_subcategory_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product_cat.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_archive_description\">woocommerce_archive_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_auth_page_footer\">woocommerce_auth_page_footer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-grant-access.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_auth_page_header\">woocommerce_auth_page_header</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-grant-access.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_available_download_count\">woocommerce_available_download_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_available_download_end\">woocommerce_available_download_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_available_download_link\">woocommerce_available_download_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_available_download_start\">woocommerce_available_download_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_available_downloads\">woocommerce_available_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_account_downloads\">woocommerce_before_account_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_account_navigation\">woocommerce_before_account_navigation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">navigation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_account_orders\">woocommerce_before_account_orders</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_account_orders_pagination\">woocommerce_before_account_orders_pagination</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_account_payment_methods\">woocommerce_before_account_payment_methods</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment-methods.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_available_downloads\">woocommerce_before_available_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">downloads.php, my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_cart\">woocommerce_before_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_cart_contents\">woocommerce_before_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_cart_table\">woocommerce_before_cart_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_cart_totals\">woocommerce_before_cart_totals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_checkout_billing_form\">woocommerce_before_checkout_billing_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-billing.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_checkout_form\">woocommerce_before_checkout_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_checkout_registration_form\">woocommerce_before_checkout_registration_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-billing.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_checkout_shipping_form\">woocommerce_before_checkout_shipping_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_customer_login_form\">woocommerce_before_customer_login_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_edit_account_address_form\">woocommerce_before_edit_account_address_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_edit_account_form\">woocommerce_before_edit_account_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_edit_address_form_\$LOAD_ADDRESS\">woocommerce_before_edit_address_form_\$LOAD_ADDRESS</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_lost_password_form\">woocommerce_before_lost_password_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-lost-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_main_content\">woocommerce_before_main_content</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php, single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_mini_cart\">woocommerce_before_mini_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_mini_cart_contents\">woocommerce_before_mini_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_my_account\">woocommerce_before_my_account</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_order_notes\">woocommerce_before_order_notes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_reset_password_form\">woocommerce_before_reset_password_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_shipping_calculator\">woocommerce_before_shipping_calculator</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_shop_loop\">woocommerce_before_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_shop_loop_item\">woocommerce_before_shop_loop_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_shop_loop_item_title\">woocommerce_before_shop_loop_item_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_single_product\">woocommerce_before_single_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_single_product_summary\">woocommerce_before_single_product_summary</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_subcategory\">woocommerce_before_subcategory</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product_cat.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_before_subcategory_title\">woocommerce_before_subcategory_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product_cat.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_actions\">woocommerce_cart_actions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_collaterals\">woocommerce_cart_collaterals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_contents\">woocommerce_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_coupon\">woocommerce_cart_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_has_errors\">woocommerce_cart_has_errors</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-errors.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_is_empty\">woocommerce_cart_is_empty</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-empty.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_backorder_notification\">woocommerce_cart_item_backorder_notification</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_class\">woocommerce_cart_item_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php, cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_name\">woocommerce_cart_item_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php, cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_permalink\">woocommerce_cart_item_permalink</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_price\">woocommerce_cart_item_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_product\">woocommerce_cart_item_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php, cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_product_id\">woocommerce_cart_item_product_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_quantity\">woocommerce_cart_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_remove_link\">woocommerce_cart_item_remove_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_subtotal\">woocommerce_cart_item_subtotal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php, cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_thumbnail\">woocommerce_cart_item_thumbnail</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php, mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_item_visible\">woocommerce_cart_item_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_no_shipping_available_html\">woocommerce_cart_no_shipping_available_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_totals_after_order_total\">woocommerce_cart_totals_after_order_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_totals_after_shipping\">woocommerce_cart_totals_after_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_totals_before_order_total\">woocommerce_cart_totals_before_order_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_cart_totals_before_shipping\">woocommerce_cart_totals_before_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_after_customer_details\">woocommerce_checkout_after_customer_details</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_after_order_review\">woocommerce_checkout_after_order_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_after_terms_and_conditions\">woocommerce_checkout_after_terms_and_conditions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">terms.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_before_customer_details\">woocommerce_checkout_before_customer_details</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_before_order_review\">woocommerce_checkout_before_order_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_before_order_review_heading\">woocommerce_checkout_before_order_review_heading</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_before_terms_and_conditions\">woocommerce_checkout_before_terms_and_conditions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">terms.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_billing\">woocommerce_checkout_billing</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_cart_item_quantity\">woocommerce_checkout_cart_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_cart_item_visible\">woocommerce_checkout_cart_item_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_coupon_message\">woocommerce_checkout_coupon_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-coupon.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_must_be_logged_in_message\">woocommerce_checkout_must_be_logged_in_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_order_review\">woocommerce_checkout_order_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_shipping\">woocommerce_checkout_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_show_terms\">woocommerce_checkout_show_terms</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">terms.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_checkout_terms_and_conditions\">woocommerce_checkout_terms_and_conditions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">terms.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_comment_pagination_args\">woocommerce_comment_pagination_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">single-product-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_create_account_default_checked\">woocommerce_create_account_default_checked</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-billing.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_edit_account_form\">woocommerce_edit_account_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_edit_account_form_end\">woocommerce_edit_account_form_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_edit_account_form_start\">woocommerce_edit_account_form_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_edit_account_form_tag\">woocommerce_edit_account_form_tag</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-edit-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_after_order_table\">woocommerce_email_after_order_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">email-order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_before_order_table\">woocommerce_email_before_order_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">email-order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_customer_details\">woocommerce_email_customer_details</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">admin-cancelled-order.php, admin-failed-order.php,
                        admin-new-order.php, customer-completed-order.php, customer-invoice.php, customer-note.php,
                        customer-on-hold-order.php, customer-processing-order.php, customer-refunded-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_downloads_column_\$COLUMN_ID\">woocommerce_email_downloads_column_\$COLUMN_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">email-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_footer\">woocommerce_email_footer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">admin-cancelled-order.php, admin-failed-order.php,
                        admin-new-order.php, customer-completed-order.php, customer-invoice.php,
                        customer-new-account.php, customer-note.php, customer-on-hold-order.php,
                        customer-processing-order.php, customer-refunded-order.php, customer-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_footer_text\">woocommerce_email_footer_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">email-footer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_header\">woocommerce_email_header</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">admin-cancelled-order.php, admin-failed-order.php,
                        admin-new-order.php, customer-completed-order.php, customer-invoice.php,
                        customer-new-account.php, customer-note.php, customer-on-hold-order.php,
                        customer-processing-order.php, customer-refunded-order.php, customer-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_order_details\">woocommerce_email_order_details</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">admin-cancelled-order.php, admin-failed-order.php,
                        admin-new-order.php, customer-completed-order.php, customer-invoice.php, customer-note.php,
                        customer-on-hold-order.php, customer-processing-order.php, customer-refunded-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_order_item_quantity\">woocommerce_email_order_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">email-order-items.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_email_order_meta\">woocommerce_email_order_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">admin-cancelled-order.php, admin-failed-order.php,
                        admin-new-order.php, customer-completed-order.php, customer-invoice.php, customer-note.php,
                        customer-on-hold-order.php, customer-processing-order.php, customer-refunded-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_enable_order_notes_field\">woocommerce_enable_order_notes_field</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_login_form\">woocommerce_login_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_login_form_end\">woocommerce_login_form_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_login_form_start\">woocommerce_login_form_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_loop_add_to_cart_link\">woocommerce_loop_add_to_cart_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">add-to-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_lost_password_confirmation_message\">woocommerce_lost_password_confirmation_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">lost-password-confirmation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_lost_password_message\">woocommerce_lost_password_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-lost-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_lostpassword_form\">woocommerce_lostpassword_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-lost-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_mini_cart_contents\">woocommerce_mini_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_mini_cart_item_class\">woocommerce_mini_cart_item_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_edit_address_title\">woocommerce_my_account_edit_address_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-edit-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_get_addresses\">woocommerce_my_account_get_addresses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_address_description\">woocommerce_my_account_my_address_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-address.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_downloads_title\">woocommerce_my_account_my_downloads_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-downloads.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_orders_column_\$COLUMN_ID\">woocommerce_my_account_my_orders_column_\$COLUMN_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">my-orders.php, orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_orders_columns\">woocommerce_my_account_my_orders_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_orders_query\">woocommerce_my_account_my_orders_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_my_account_my_orders_title\">woocommerce_my_account_my_orders_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">my-orders.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_no_available_payment_methods_message\">woocommerce_no_available_payment_methods_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-pay.php, payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_no_products_found\">woocommerce_no_products_found</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_no_shipping_available_html\">woocommerce_no_shipping_available_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_button_html\">woocommerce_order_button_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_details_after_customer_details\">woocommerce_order_details_after_customer_details</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_details_after_order_table\">woocommerce_order_details_after_order_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_details_after_order_table_items\">woocommerce_order_details_after_order_table_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_details_before_order_table\">woocommerce_order_details_before_order_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_details_before_order_table_items\">woocommerce_order_details_before_order_table_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_class\">woocommerce_order_item_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, email-order-items.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_meta_end\">woocommerce_order_item_meta_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, email-order-items.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_meta_start\">woocommerce_order_item_meta_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, email-order-items.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_name\">woocommerce_order_item_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, email-order-items.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_permalink\">woocommerce_order_item_permalink</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_quantity_html\">woocommerce_order_item_quantity_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_thumbnail\">woocommerce_order_item_thumbnail</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">email-order-items.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_item_visible\">woocommerce_order_item_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details-item.php, email-order-items.php, form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_order_tracking_status\">woocommerce_order_tracking_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">tracking.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_pagination_args\">woocommerce_pagination_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">pagination.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_pay_order_after_submit\">woocommerce_pay_order_after_submit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_pay_order_before_submit\">woocommerce_pay_order_before_submit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_pay_order_button_html\">woocommerce_pay_order_button_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-pay.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_proceed_to_checkout\">woocommerce_proceed_to_checkout</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_meta_end\">woocommerce_product_meta_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">meta.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_meta_start\">woocommerce_product_meta_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">meta.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_price_class\">woocommerce_product_price_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">price.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_review_comment_form_args\">woocommerce_product_review_comment_form_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">single-product-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_review_list_args\">woocommerce_product_review_list_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">single-product-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_thumbnails\">woocommerce_product_thumbnails</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">product-image.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_product_thumbnails_columns\">woocommerce_product_thumbnails_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">product-image.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_purchase_note_order_statuses\">woocommerce_purchase_note_order_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_purchase_order_item_types\">woocommerce_purchase_order_item_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">order-details.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_receipt_\$ORDER->GET_PAYMENT_METHOD\">woocommerce_receipt_\$ORDER->GET_PAYMENT_METHOD</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">order-receipt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_register_form\">woocommerce_register_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_register_form_end\">woocommerce_register_form_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_register_form_start\">woocommerce_register_form_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_register_form_tag\">woocommerce_register_form_tag</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-login.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_reset_password_message\">woocommerce_reset_password_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_resetpassword_form\">woocommerce_resetpassword_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">form-reset-password.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_return_to_shop_redirect\">woocommerce_return_to_shop_redirect</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">downloads.php, orders.php, cart-empty.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_after_comment_text\">woocommerce_review_after_comment_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_before\">woocommerce_review_before</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_before_comment_meta\">woocommerce_review_before_comment_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_before_comment_text\">woocommerce_review_before_comment_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_comment_text\">woocommerce_review_comment_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_meta\">woocommerce_review_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_after_cart_contents\">woocommerce_review_order_after_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_after_order_total\">woocommerce_review_order_after_order_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_after_payment\">woocommerce_review_order_after_payment</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_after_shipping\">woocommerce_review_order_after_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_after_submit\">woocommerce_review_order_after_submit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_before_cart_contents\">woocommerce_review_order_before_cart_contents</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_before_order_total\">woocommerce_review_order_before_order_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_before_payment\">woocommerce_review_order_before_payment</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_before_shipping\">woocommerce_review_order_before_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">review-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_review_order_before_submit\">woocommerce_review_order_before_submit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">payment.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_reviews_title\">woocommerce_reviews_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">single-product-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_sale_flash\">woocommerce_sale_flash</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">sale-flash.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_share\">woocommerce_share</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">share.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_ship_to_different_address_checked\">woocommerce_ship_to_different_address_checked</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">form-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_calculator_enable_city\">woocommerce_shipping_calculator_enable_city</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_calculator_enable_country\">woocommerce_shipping_calculator_enable_country</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_calculator_enable_postcode\">woocommerce_shipping_calculator_enable_postcode</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_calculator_enable_state\">woocommerce_shipping_calculator_enable_state</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">shipping-calculator.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_estimate_html\">woocommerce_shipping_estimate_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shipping_may_be_available_html\">woocommerce_shipping_may_be_available_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">cart-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shop_loop\">woocommerce_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shop_loop_item_title\">woocommerce_shop_loop_item_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_shop_loop_subcategory_title\">woocommerce_shop_loop_subcategory_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-product_cat.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_short_description\">woocommerce_short_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">short-description.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_show_page_title\">woocommerce_show_page_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_sidebar\">woocommerce_sidebar</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">archive-product.php, single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_single_product_image_gallery_classes\">woocommerce_single_product_image_gallery_classes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">product-image.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_single_product_image_thumbnail_html\">woocommerce_single_product_image_thumbnail_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">product-image.php, product-thumbnails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_single_product_summary\">woocommerce_single_product_summary</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-single-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_terms_is_checked_default\">woocommerce_terms_is_checked_default</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">terms.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_thankyou\">woocommerce_thankyou</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">thankyou.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_thankyou_\$ORDER->GET_PAYMENT_METHOD\">woocommerce_thankyou_\$ORDER->GET_PAYMENT_METHOD</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">thankyou.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_thankyou_order_received_text\">woocommerce_thankyou_order_received_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">thankyou.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_view_order\">woocommerce_view_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">tracking.php, view-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_cart_item_quantity\">woocommerce_widget_cart_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_cart_item_visible\">woocommerce_widget_cart_item_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_product_item_end\">woocommerce_widget_product_item_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-widget-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_product_item_start\">woocommerce_widget_product_item_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-widget-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_product_review_item_end\">woocommerce_widget_product_review_item_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-widget-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_product_review_item_start\">woocommerce_widget_product_review_item_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">content-widget-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_shopping_cart_before_buttons\">woocommerce_widget_shopping_cart_before_buttons</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"https://github.com/woocommerce/woocommerce/search?utf8=%E2%9C%93&q=woocommerce_widget_shopping_cart_buttons\">woocommerce_widget_shopping_cart_buttons</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">mini-cart.php</td>
                </tr>
            </tbody>
        </table>


        <h2 id=\"hooks-template-functions\">Template Functions</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1733
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_product_search_form\">get_product_search_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1740
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_default_products_per_row\">loop_shop_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1747
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_class\">post_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1754
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_product_search_form\">pre_get_product_search_form</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1761
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_cat_class\">product_cat_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1768
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_get_product_thumbnail\">single_product_archive_thumbnail_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1775
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_subcategory_thumbnail\">subcategory_archive_thumbnail_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1782
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_empty_cart_message\">wc_empty_cart_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1789
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_default_product_tabs\">wc_product_enable_dimensions_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1796
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_template_single_add_to_cart\">woocommerce_\$PRODUCT->GET_TYPE_add_to_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1803
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_account_content\">woocommerce_account_\$KEY_endpoint</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1810
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_output_product_categories\">woocommerce_after_output_product_categories</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1817
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_content\">woocommerce_after_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1824
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_variable_add_to_cart\">woocommerce_ajax_variation_threshold</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1831
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_content\">woocommerce_archive_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1838
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_display_product_attributes\">woocommerce_attribute</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1845
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_output_product_categories\">woocommerce_before_output_product_categories</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1852
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_content\">woocommerce_before_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1859
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_breadcrumb\">woocommerce_breadcrumb</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1866
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_breadcrumb\">woocommerce_breadcrumb_defaults</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1873
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_breadcrumb\">woocommerce_breadcrumb_home_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1880
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_catalog_ordering\">woocommerce_catalog_orderby</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1887
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_template_redirect\">woocommerce_checkout_redirect_empty_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1894
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_cross_sell_display\">woocommerce_cross_sells_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1901
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_cross_sell_display\">woocommerce_cross_sells_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1908
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_cross_sell_display\">woocommerce_cross_sells_orderby</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1915
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_cross_sell_display\">woocommerce_cross_sells_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1922
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_catalog_ordering\">woocommerce_default_catalog_orderby</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1929
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_demo_store\">woocommerce_demo_store</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1936
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_display_item_downloads\">woocommerce_display_item_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1943
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_display_item_meta\">woocommerce_display_item_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1950
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_display_product_attributes\">woocommerce_display_product_attributes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1957
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_dropdown_variation_attribute_options\">woocommerce_dropdown_variation_attribute_options_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1964
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_dropdown_variation_attribute_options\">woocommerce_dropdown_variation_attribute_options_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1971
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_email_order_items\">woocommerce_email_order_items_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1978
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_email_order_items\">woocommerce_email_order_items_table</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1985
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_form_field\">woocommerce_form_field</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1992
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_form_field\">woocommerce_form_field_\$ARGS[type]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 1999
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_form_field\">woocommerce_form_field_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2006
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_gallery_full_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2013
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_gallery_image_html_attachment_image_params</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2020
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_gallery_image_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2027
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_gallery_thumbnail_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2034
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_formatted_cart_item_data\">woocommerce_get_item_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2041
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_html_from_text\">woocommerce_get_price_html_from_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2048
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_privacy_policy_text\">woocommerce_get_privacy_policy_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2055
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_class\">woocommerce_get_product_class_include_taxonomies</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2062
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_get_product_subcategories\">woocommerce_get_product_subcategories_cache_key</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2069
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_cart_remove_url\">woocommerce_get_remove_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2076
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_star_rating_html\">woocommerce_get_star_rating_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2083
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_stock_html\">woocommerce_get_stock_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2090
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_terms_and_conditions_checkbox_text\">woocommerce_get_terms_and_conditions_checkbox_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2097
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_cart_undo_url\">woocommerce_get_undo_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_template_loop_add_to_cart\">woocommerce_loop_add_to_cart_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_template_loop_product_link_open\">woocommerce_loop_product_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_account_orders\">woocommerce_my_account_my_orders_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_content\">woocommerce_no_products_found</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2132
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_checkout_payment\">woocommerce_order_button_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_output_related_products\">woocommerce_output_related_products_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_page_title\">woocommerce_page_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2153
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_privacy_policy_page_id\">woocommerce_privacy_policy_page_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_rating_html\">woocommerce_product_get_rating_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_product_loop_end\">woocommerce_product_loop_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_product_loop_start\">woocommerce_product_loop_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2181
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_template_loop_product_title\">woocommerce_product_loop_title_classes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2188
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_get_product_subcategories\">woocommerce_product_subcategories_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2195
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_get_product_subcategories\">woocommerce_product_subcategories_hide_empty</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2202
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_product_thumbnails_large_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_classes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2223
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_inputmode</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2230
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_max</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_min</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_pattern</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_quantity_input\">woocommerce_quantity_input_step</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_template_redirect\">woocommerce_redirect_single_search_result</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_related_products\">woocommerce_related_products_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_review_display_gravatar\">woocommerce_review_gravatar_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_content\">woocommerce_show_page_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2286
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_gallery_image_html\">woocommerce_single_product_flexslider_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2293
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_stock_html\">woocommerce_stock_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2300
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_template_loop_category_title\">woocommerce_subcategory_count_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_terms_and_conditions_page_id\">woocommerce_terms_and_conditions_page_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_theme_slug_for_templates\">woocommerce_theme_slug_for_templates</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2321
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_upsell_display\">woocommerce_upsell_display_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2328
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_upsell_display\">woocommerce_upsells_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_upsell_display\">woocommerce_upsells_orderby</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2342
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_upsell_display\">woocommerce_upsells_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2349
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_order_again_button\">woocommerce_valid_order_statuses_for_order_again</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_dropdown_variation_attribute_options\">woocommerce_variation_option_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-template-functions.php</td>
                </tr>
            </tbody>
        </table>

        <h2 id=\"hooks-shortcodes\">Shortcodes</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2376
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">after_woocommerce_add_payment_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2383
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">after_woocommerce_pay</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2389
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">allow_password_reset</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2395
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">before_woocommerce_add_payment_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">before_woocommerce_pay</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2408
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">lostpassword_post</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2414
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">password_reset</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2420
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">retrieve_password</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2426
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_account_\$KEY_endpoint</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2433
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_address_to_edit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2440
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_after_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2447
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_before_checkout_form_cart_notices</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2454
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_before_shop_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2461
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Cart.html\">woocommerce_calculated_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2468
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Cart.html\">woocommerce_cart_calculate_shipping_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2475
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Cart.html\">woocommerce_check_cart_items</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-cart.php, class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2481
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_checkout_redirect_empty_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2488
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_get_username_from_email</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2495
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_my_account_edit_address_field_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2502
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_my_account_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2509
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_pay_order_button_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2516
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_pay_order_product_in_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2523
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_product_query_max_rand_cache_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2530
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-My-Account.html\">woocommerce_reset_password_notification</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-my-account.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2537
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_shortcode_\$THIS->TYPE_loop_no_results</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2544
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_shortcode_after_\$THIS->TYPE_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2551
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_shortcode_before_\$THIS->TYPE_loop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2558
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Order-Tracking.html\">woocommerce_shortcode_order_tracking_order_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-order-tracking.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2565
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Products.html\">woocommerce_shortcode_products_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2572
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_thankyou_order_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2579
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Checkout.html\">woocommerce_thankyou_order_key</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2586
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcode-Order-Tracking.html\">woocommerce_track_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcode-order-tracking.php</td>
                </tr>
            </tbody>
        </table>

        <h2 id=\"hooks-widgets\">Widgets</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2606
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Products.html\">woocommerce_after_widget_product_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-products.php, class-wc-widget-recently-viewed.php,
                        class-wc-widget-top-rated-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2614
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Recent-Reviews.html\">woocommerce_after_widget_product_review_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-recent-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2621
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Products.html\">woocommerce_before_widget_product_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-products.php, class-wc-widget-recently-viewed.php,
                        class-wc-widget-top-rated-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2629
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Recent-Reviews.html\">woocommerce_before_widget_product_review_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-recent-reviews.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2636
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_get_filtered_term_product_counts_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2643
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_layered_nav_any_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2650
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_layered_nav_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2657
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_layered_nav_count_maybe_cache</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2664
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_layered_nav_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2671
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Layered-Nav.html\">woocommerce_layered_nav_term_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-layered-nav.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2678
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_post_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2685
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_sql</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2692
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_widget_max_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2699
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_widget_min_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2706
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_widget_step</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2713
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Price-Filter.html\">woocommerce_price_filter_widget_tax_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-price-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2720
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Product-Categories.html\">woocommerce_product_categories_widget_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-product-categories.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2727
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Product-Categories.html\">woocommerce_product_categories_widget_dropdown_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-product-categories.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2734
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Product-Categories.html\">woocommerce_product_categories_widget_main_term</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-product-categories.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2741
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Product-Categories.html\">woocommerce_product_categories_widget_product_terms_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-product-categories.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2748
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Product-Tag-Cloud.html\">woocommerce_product_tag_cloud_widget_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-product-tag-cloud.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2755
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Products.html\">woocommerce_products_widget_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-products.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2762
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Rating-Filter.html\">woocommerce_rating_filter_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-rating-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2769
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Rating-Filter.html\">woocommerce_rating_filter_link</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-rating-filter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2776
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Recently-Viewed.html\">woocommerce_recently_viewed_products_widget_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-recently-viewed.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2783
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget-Cart.html\">woocommerce_widget_cart_is_hidden</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-widget-cart.php</td>
                </tr>
            </tbody>
        </table>

        <h2 id=\"hooks-data-stores\">Data Stores</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2802
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">product_variation_linked</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2809
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_before_delete_\$POST_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2816
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Item-Type-Data-Store.html\">woocommerce_before_delete_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-item-type-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_coupon_loaded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2830
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_coupon_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2837
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_get_total_spent</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_get_total_spent_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2851
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_loaded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2858
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2865
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_pre_search_customers</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2872
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_customer_search_customers</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2879
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data-Store-WP.html\">woocommerce_data_store_wp_\$THIS->META_TYPE_read_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-data-store-wp.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2886
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_decrease_coupon_usage_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2893
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Data-Store-CPT.html\">woocommerce_default_order_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2900
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_delete_\$POST_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2907
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_delete_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2914
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_delete_customer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2921
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Data-Store-CPT.html\">woocommerce_delete_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2928
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Item-Type-Data-Store.html\">woocommerce_delete_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-item-type-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2935
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Refund-Data-Store-CPT.html\">woocommerce_delete_order_refund</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-refund-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2942
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone-Data-Store.html\">woocommerce_delete_shipping_zone</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2949
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone-Data-Store.html\">woocommerce_delete_shipping_zone_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2956
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Data-Store.html\">woocommerce_downloadable_file_permission_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2963
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Data-Store.html\">woocommerce_downloadable_file_permission_format</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2970
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Log-Data-Store.html\">woocommerce_downloadable_product_download_log_insert</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-log-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2977
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Log-Data-Store.html\">woocommerce_downloadable_product_download_log_insert_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-log-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2984
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Log-Data-Store.html\">woocommerce_downloadable_product_download_log_insert_format</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-log-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2991
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_file_download_path</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 2998
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_get_product_id_by_sku</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3005
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_get_variation_prices_hash</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3012
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data-Store-WP.html\">woocommerce_get_wp_query_args</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-data-store-wp.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3018
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download-Data-Store.html\">woocommerce_grant_product_download_access</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3025
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_increase_coupon_usage_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3032
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_new_coupon</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3038
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_new_coupon_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3045
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_new_customer</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3051
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_new_order</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3057
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Data-Store-CPT.html\">woocommerce_new_order_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3064
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Item-Type-Data-Store.html\">woocommerce_new_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-item-type-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3071
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Token-Data-Store.html\">woocommerce_new_payment_token</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-token-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3078
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_new_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3085
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_new_product_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3092
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_new_product_variation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3099
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_new_product_variation_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook-Data-Store.html\">woocommerce_new_webhook</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_order_data_store_cpt_get_orders_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Data-Store-CPT.html\">woocommerce_order_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-data-store-cpt.php,
                        class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3127
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Refund-Data-Store-CPT.html\">woocommerce_order_refund_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-refund-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3134
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_payment_complete_order_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Token-Data-Store.html\">woocommerce_payment_token_deleted</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-token-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3148
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Token-Data-Store.html\">woocommerce_payment_token_loaded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-token-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Token-Data-Store.html\">woocommerce_payment_token_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-token-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3162
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Token-Data-Store.html\">woocommerce_payment_token_updated</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-token-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3169
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_process_product_file_download_paths</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3176
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_data_store_cpt_get_products_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3183
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_object_updated_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3190
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_pre_search_products</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3197
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_related_posts_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_set_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_set_stock_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_set_visibility</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_product_type_changed</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3232
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_product_variation_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_product_variation_title_attributes_separator</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3246
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_product_variation_title_include_attributes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone-Data-Store.html\">woocommerce_shipping_zone_loaded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3260
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_shop_order_search_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_shop_order_search_results</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_trash_\$POST_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_trash_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3288
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Data-Store-CPT.html\">woocommerce_trash_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3295
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon-Data-Store-CPT.html\">woocommerce_update_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3302
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_update_customer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3309
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Data-Store.html\">woocommerce_update_customer_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3316
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Data-Store-CPT.html\">woocommerce_update_order</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3322
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/Abstract-WC-Order-Item-Type-Data-Store.html\">woocommerce_update_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order-item-type-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3329
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_update_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3336
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_update_product_stock_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3343
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation-Data-Store-CPT.html\">woocommerce_update_product_variation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3350
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped-Data-Store-CPT.html\">woocommerce_updated_product_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped-data-store-cpt.php,
                        class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3358
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_updated_product_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_updated_product_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3372
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variable_children_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3379
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variation_prices</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3386
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variation_prices_array</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3393
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variation_prices_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3400
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variation_prices_regular_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3407
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable-Data-Store-CPT.html\">woocommerce_variation_prices_sale_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3414
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_variation_set_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3421
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Data-Store-CPT.html\">woocommerce_variation_set_stock_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-data-store-cpt.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3428
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook-Data-Store.html\">woocommerce_webhook_deleted</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3435
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook-Data-Store.html\">woocommerce_webhook_loaded</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3441
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook-Data-Store.html\">woocommerce_webhook_updated</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3448
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data-Store-WP.html\">wp_search_stopwords</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-data-store-wp.php</td>
                </tr>
            </tbody>
        </table>

        <h2 id=\"hooks-core-classes\">Core Classes</h2>
        <table class=\"phpdocumentor-table_of_contents\">
            <thead>
                <tr>
                    <th class=\"phpdocumentor-heading\">Hook</th>
                    <th class=\"phpdocumentor-heading\">Type</th>
                    <th class=\"phpdocumentor-heading\">File(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3467
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcodes.html\">\$SHORTCODE_shortcode_tag</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcodes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3472
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">\$name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3479
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Deprecated-Action-Hooks.html\">\$old_hook</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-deprecated-action-hooks.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3485
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Background-Process.html\">WC_BACKGROUND_PROCESS->IDENTIFIER_cron_interval</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3492
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer.html\">WC_CUSTOMER->GET_HOOK_PREFIX\$ADDRESS_\$PROP</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3499
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data.html\">WC_DATA->GET_HOOK_PREFIX\$KEY</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3505
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data.html\">WC_DATA->GET_HOOK_PREFIX\$PROP</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3511
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">WC_ORDER->GET_HOOK_PREFIX\$ADDRESS_\$PROP</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3517
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXbackorders</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3524
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXcatalog_visibility</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3531
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXheight</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3538
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXimage_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3545
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXlength</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3552
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXpurchase_note</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3559
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXshipping_class_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3566
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXsku</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3573
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXstock_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3580
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXtax_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3587
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXweight</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3594
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">WC_PRODUCT_VARIATION->GET_HOOK_PREFIXwidth</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WP-Background-Process.html\">WP_BACKGROUND_PROCESS->IDENTIFIER_cron_interval</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wp-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WP-Background-Process.html\">WP_BACKGROUND_PROCESS->IDENTIFIER_default_time_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wp-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3615
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WP-Background-Process.html\">WP_BACKGROUND_PROCESS->IDENTIFIER_memory_exceeded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wp-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3622
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WP-Background-Process.html\">WP_BACKGROUND_PROCESS->IDENTIFIER_queue_lock_time</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wp-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3629
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WP-Background-Process.html\">WP_BACKGROUND_PROCESS->IDENTIFIER_time_exceeded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wp-background-process.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3636
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Setup-Wizard.html\">admin_enqueue_scripts</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-setup-wizard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3642
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Setup-Wizard.html\">admin_head</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-setup-wizard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3648
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Setup-Wizard.html\">admin_print_styles</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-setup-wizard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3654
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">before_woocommerce_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3660
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">default_checkout_\$INPUT</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3666
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_deprecated_argument\">deprecated_argument_run</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3673
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_deprecated_function\">deprecated_function_run</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3680
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_deprecated_hook\">deprecated_hook_run</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3687
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_doing_it_wrong\">doing_it_wrong_run</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3694
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_price\">formatted_woocommerce_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3701
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Background-Emailer.html\">https_local_ssl_verify</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-background-emailer.php, wp-async-request.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3707
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_is_woocommerce\">is_woocommerce</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3714
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Cat-Dropdown-Walker.html\">list_product_cats</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-cat-dropdown-walker.php,
                        class-wc-product-cat-list-walker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">login_errors</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">loop_shop_per_page</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3732
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">loop_shop_post_in</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3739
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Post-Types.html\">media_upload_file</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3744
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">plugin_locale</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3751
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_attribute_types\">product_attributes_type_selector</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3758
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_types\">product_type_selector</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3765
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">query_vars</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3771
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_price\">raw_woocommerce_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3778
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-CRUD-Controller.html\">rest_\$THIS->POST_TYPE_collection_params</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-crud-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3784
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-CLI-Runner.html\">rest_api_init</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cli-runner.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3791
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_sanitize_taxonomy_name\">sanitize_taxonomy_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3798
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Twenty-Nineteen.html\">twentynineteen_custom_colors_lightness</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-twenty-nineteen.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3805
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">validate_password_reset</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3811
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_to_cart_message\">wc_add_to_cart_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3818
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_to_cart_message\">wc_add_to_cart_message_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3825
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Reports.html\">wc_admin_reports_path</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-reports.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3831
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_scheduled_sales\">wc_after_products_ending_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3838
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_scheduled_sales\">wc_after_products_starting_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 3844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">wc_ajax_\$ACTION</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3851
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_scheduled_sales\">wc_before_products_ending_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3858
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_scheduled_sales\">wc_before_products_starting_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3865
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_decimal_separator\">wc_get_price_decimal_separator</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3872
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_decimals\">wc_get_price_decimals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3879
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_thousand_separator\">wc_get_price_thousand_separator</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3886
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_template\">wc_get_template</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3893
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_template_part\">wc_get_template_part</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3900
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">wc_order_is_editable</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3906
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_order_statuses\">wc_order_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3913
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_order_types\">wc_order_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3920
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">wc_payment_gateway_form_saved_payment_methods_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3927
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_price\">wc_price</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3933
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_price\">wc_price_args</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3939
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">wc_privacy_policy_content</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3945
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_product_dimensions_enabled\">wc_product_dimensions_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3952
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">wc_product_enable_dimensions_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3959
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_product_has_unique_sku\">wc_product_has_unique_sku</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3966
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_product_post_type_link\">wc_product_post_type_link_product_cat</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3973
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_product_sku_enabled\">wc_product_sku_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3980
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_product_weight_enabled\">wc_product_weight_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3987
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_round_tax_total\">wc_round_tax_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 3994
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Session-Handler.html\">wc_session_expiration</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-session-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4000
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Session-Handler.html\">wc_session_expiring</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-session-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4006
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Session-Handler.html\">wc_session_use_secure_cookie</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-session-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4012
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_shipping_enabled\">wc_shipping_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4019
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_tax_enabled\">wc_tax_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4026
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Webhooks-Table-List.html\">webhook_row_actions</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-webhooks-table-list.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 4031
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget.html\">widget_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-widget.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4037
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data-Store.html\">woocommerce_\$OBJECT_TYPE_data_store</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4044
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-CSV-Exporter.html\">woocommerce_\$THIS->EXPORT_TYPE_export_batch_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4051
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-CSV-Exporter.html\">woocommerce_\$THIS->EXPORT_TYPE_export_column_names</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4058
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-CSV-Exporter.html\">woocommerce_\$THIS->EXPORT_TYPE_export_get_filename</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4065
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-CSV-Exporter.html\">woocommerce_\$THIS->EXPORT_TYPE_export_rows</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4072
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_\$TYPEfields</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4078
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_downloads_columns\">woocommerce_account_downloads_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4085
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_menu_item_classes\">woocommerce_account_menu_item_classes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4092
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_menu_items\">woocommerce_account_menu_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4099
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_orders_columns\">woocommerce_account_orders_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_payment_methods_columns\">woocommerce_account_payment_methods_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4113
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_notice\">woocommerce_add_\$NOTICE_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-notice-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_cart_item</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4126
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_cart_item_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4132
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_notice\">woocommerce_add_message</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-notice-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_add_order_again_cart_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_to_cart</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4152
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_add_to_cart_fragments</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_add_to_cart_handler</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_add_to_cart_handler_\$ADD_TO_CART_HANDLER</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4171
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_to_cart_message\">woocommerce_add_to_cart_item_name_in_quotes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4178
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_add_to_cart_product_id</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php, class-wc-cart-session.php,
                        class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4185
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_to_cart_message\">woocommerce_add_to_cart_qty_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_to_cart_quantity</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4198
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_add_to_cart_redirect</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php, class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_to_cart_sold_individually_found_in_cart</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_add_to_cart_sold_individually_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_add_to_cart_validation</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php, class-wc-cart-session.php,
                        class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Addons.html\">woocommerce_addons_section_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-addons.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Addons.html\">woocommerce_addons_sections</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-addons.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_adjust_non_base_location_prices</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php, wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Attributes.html\">woocommerce_admin_attribute_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-attributes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Assets.html\">woocommerce_admin_css</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-assets.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4257
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Dashboard.html\">woocommerce_admin_dashboard_recent_reviews</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4264
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_admin_field_\$VALUE[type]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Assets.html\">woocommerce_admin_meta_boxes_variations_per_page</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-assets.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4278
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Reports.html\">woocommerce_admin_reports</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-reports.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4284
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_admin_settings_sanitize_option</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4291
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_admin_settings_sanitize_option_\$OPTION_NAME</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4298
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Attributes.html\">woocommerce_after_add_attribute_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-attributes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_after_calculate_totals</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_after_cart_item_quantity_update</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4318
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_after_checkout_validation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Dashboard.html\">woocommerce_after_dashboard_status_widget</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4332
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Attributes.html\">woocommerce_after_edit_attribute_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-attributes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4339
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_after_pay_action</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4345
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_after_product_ordering</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4351
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_after_register_post_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4358
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_after_register_taxonomy</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_after_save_address_validation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4372
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_reorder_terms\">woocommerce_after_set_term_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-term-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4379
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_after_single_product_ordering</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4386
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_template\">woocommerce_after_template_part</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4393
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_add_order_item_meta</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4399
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_added_to_cart</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4405
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_get_customer_details</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4411
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_get_endpoint</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4417
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_order_item</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4423
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_order_items_added</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4429
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_revoke_access_to_product_download</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4436
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_ajax_save_product_variations</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4442
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_allow_send_queued_transactional_email</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4449
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">woocommerce_anonymize_completed_orders_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4456
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-API.html\">woocommerce_api_\$API_REQUEST</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4462
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Legacy-API.html\">woocommerce_api_classes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-legacy-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4468
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-API-Keys-Table-List.html\">woocommerce_api_key_last_access_datetime</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-api-keys-table-list.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4475
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Legacy-API.html\">woocommerce_api_loaded</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-legacy-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4481
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Auth.html\">woocommerce_api_permissions_in_scope</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-auth.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4487
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-API.html\">woocommerce_api_request</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4493
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_api_request_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4499
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_woocommerce_legacy_paypal_ipn\">woocommerce_api_wc_gateway_paypal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4506
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_apidocs_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4512
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_applied_coupon</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4518
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer.html\">woocommerce_apply_base_tax_for_local_pickup</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4525
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_apply_individual_use_coupon</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4531
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracks.html\">woocommerce_apply_tracking</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracks.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4537
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Site-Tracking.html\">woocommerce_apply_user_tracking</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-site-tracking.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4543
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_apply_with_individual_use_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4550
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_attribute\">woocommerce_attribute_added</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4557
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_attribute_default_is_variation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4564
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_attribute_default_visibility</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4570
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_attribute\">woocommerce_attribute_deleted</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4577
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_attribute_label\">woocommerce_attribute_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4584
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_attribute_orderby\">woocommerce_attribute_orderby</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4591
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_attribute_show_in_nav_menus</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4598
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_attribute_taxonomies\">woocommerce_attribute_taxonomies</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4605
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_attribute\">woocommerce_attribute_updated</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4612
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateways.html\">woocommerce_available_payment_gateways</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateways.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4619
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_available_variation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4626
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Regenerate-Images.html\">woocommerce_background_image_regeneration</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-regenerate-images.php, class-wc-shop-customizer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4633
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Product.html\">woocommerce_backordered_item_meta_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-product.php, abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4640
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_base_tax_rates</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4646
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer-Download.html\">woocommerce_before_\$THIS->OBJECT_TYPE_object_save</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer-download.php, class-wc-order.php,
                        class-wc-product-variable.php, class-wc-shipping-zone.php, abstract-wc-data.php,
                        abstract-wc-order.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4655
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Attributes.html\">woocommerce_before_add_attribute_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-attributes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4662
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_attribute\">woocommerce_before_attribute_delete</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4669
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_before_calculate_totals</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4675
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_before_cart_emptied</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4681
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_before_cart_item_quantity_zero</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4688
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_before_checkout_process</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4694
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_order_item\">woocommerce_before_delete_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-item-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4701
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Attributes.html\">woocommerce_before_edit_attribute_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-attributes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4708
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_before_pay_action</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4714
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_save_order_items\">woocommerce_before_save_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-admin-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_save_order_items\">woocommerce_before_save_order_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-admin-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4728
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_template\">woocommerce_before_template_part</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4735
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Breadcrumb.html\">woocommerce_breadcrumb_main_term</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-breadcrumb.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4741
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Breadcrumb.html\">woocommerce_breadcrumb_product_terms_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-breadcrumb.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4748
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Post-Types.html\">woocommerce_bulk_edit_save_price_product_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4755
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_bulk_edit_variations</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4761
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_bulk_edit_variations_default</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4767
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_bulk_edit_variations_need_children</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4774
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget.html\">woocommerce_cached_widget_id</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-widget.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4780
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_calc_shipping_tax</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 4785
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_calc_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4792
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_calculate_item_totals_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4799
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_calculate_totals</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4805
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_calculated_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4811
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_reduce_stock_levels\">woocommerce_can_reduce_order_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4818
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_increase_stock_levels\">woocommerce_can_restore_order_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4825
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cancel_unpaid_orders\">woocommerce_cancel_unpaid_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4832
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_cancelled_order</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4838
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart___FUNCTION__</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_calculate_fees</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4850
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_cart_contents_changed</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php, class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4857
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_contents_count</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4863
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_contents_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4869
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_contents_weight</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4875
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_cart_coupon_types\">woocommerce_cart_coupon_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-coupon-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4882
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_crosssell_ids</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4888
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Legacy-Cart.html\">woocommerce_cart_discounts_before_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-legacy-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4895
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_emptied</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4901
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_cart_fragment_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4908
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_get_taxes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4914
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_hash</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4920
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_cart_hash_key</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4926
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_hide_zero_taxes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 4931
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4938
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_cart_item_data_hash\">woocommerce_cart_item_data_to_validate</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4945
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_item_removed</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4951
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_cart_item_removed_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4958
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_item_restored</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4964
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_cart_loaded_from_session</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4971
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_needs_payment</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4977
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_needs_shipping</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4983
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_needs_shipping_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4989
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_product_price</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 4995
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_product_subtotal</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5001
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_ready_to_calc_shipping</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5007
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_cart_redirect_after_error</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5013
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_remove_taxes_zero_rate_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php, class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5020
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_reset</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5026
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_shipping_method_label\">woocommerce_cart_shipping_method_full_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5033
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_shipping_packages</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5039
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_shipping_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5045
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_cart_shortcode_tag</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5051
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_subtotal</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5057
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_tax_totals</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5063
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_taxes_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5069
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5075
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_total_discount</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5081
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_cart_total_ex_tax</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5087
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_coupon_html\">woocommerce_cart_totals_coupon_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5094
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_coupon_label\">woocommerce_cart_totals_coupon_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_fee_html\">woocommerce_cart_totals_fee_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_cart_totals_get_fees_from_cart_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5115
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_cart_totals_get_item_tax_rates</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5122
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_order_total_html\">woocommerce_cart_totals_order_total_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_taxes_total_html\">woocommerce_cart_totals_taxes_total_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_cart_updated</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5142
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_caught_exception\">woocommerce_caught_exception</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5149
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_change_term_counts\">woocommerce_change_term_counts</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-term-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_check_cart_items</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5162
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5168
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_coupon_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_fee_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_line_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_line_item_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_shipping_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5203
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_create_order_tax_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_customer_id</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_fields</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_get_value</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5234
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_no_payment_needed_redirect</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_order_processed</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_postcode_validation_notice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5254
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_posted_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5260
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_process</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5266
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_registration_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5273
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_registration_required</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5280
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_required_field_notice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5287
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_checkout_shortcode_tag</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5293
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_update_customer</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_update_customer_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_update_order_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5313
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_checkout_update_order_review</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5319
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_checkout_update_order_review_expired</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5326
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_checkout_update_user_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5333
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Block-Library.html\">woocommerce_components_settings</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-block-library.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5339
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_continents</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5345
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_to_cart_message\">woocommerce_continue_shopping_redirect</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5352
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Session-Handler.html\">woocommerce_cookie</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-session-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5358
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_setcookie\">woocommerce_cookie_httponly</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_copy_email_template</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5377
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_allowed_countries</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_allowed_country_states</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5397
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_address_2</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5404
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_city</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5410
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_country</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_postcode</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5422
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_base_state</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5428
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_estimated_for_prefix</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5435
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_ex_tax_or_vat</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5441
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_inc_tax_or_vat</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5448
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_shipping_countries</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5455
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_shipping_country_states</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5462
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_shipping_to_prefix</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5469
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_countries_tax_or_vat</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5475
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_country_locale_field_selectors</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5482
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_coupon_code\">woocommerce_coupon_code</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5489
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_custom_discounts_array</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5496
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_coupon_html\">woocommerce_coupon_discount_amount_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5503
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_coupon_types\">woocommerce_coupon_discount_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-coupon-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5510
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_coupon_error</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php, class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5516
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_get_apply_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5523
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_coupon_get_discount_amount</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php, class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5529
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_get_items_to_validate</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5536
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_is_valid</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5542
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_coupon_is_valid_for_cart</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5548
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_coupon_is_valid_for_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5555
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_coupon_message</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5561
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_coupon_sort</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5567
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_validate_expiry_date</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5574
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_validate_maximum_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5581
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_validate_minimum_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Discounts.html\">woocommerce_coupon_validate_user_usage_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-discounts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5595
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_coupons_enabled\">woocommerce_coupons_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-coupon-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5602
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_create_order</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_page\">woocommerce_create_page_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-admin-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5615
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_create_pages</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5621
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_create_refund</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5628
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_new_customer\">woocommerce_created_customer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5635
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-CC.html\">woocommerce_credit_card_form_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-cc.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5642
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-CC.html\">woocommerce_credit_card_form_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-cc.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5649
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-CC.html\">woocommerce_credit_card_form_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-cc.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5656
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_credit_card_type_label\">woocommerce_credit_card_type_labels</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5663
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_woocommerce_currencies\">woocommerce_currencies</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5670
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_woocommerce_currency\">woocommerce_currency</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5677
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_woocommerce_currency_symbol\">woocommerce_currency_symbol</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5684
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_woocommerce_currency_symbol\">woocommerce_currency_symbols</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5691
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Profile.html\">woocommerce_current_user_can_edit_customer_meta_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-profile.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5698
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Customize.html\">woocommerce_custom_nav_menu_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-customize.php, class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5705
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_available_downloads\">woocommerce_customer_available_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5712
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_default_location\">woocommerce_customer_default_location</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5719
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_default_location\">woocommerce_customer_default_location_array</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_customer_edit_account_url\">woocommerce_customer_edit_account_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5733
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer.html\">woocommerce_customer_get_downloadable_products</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5740
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Profile.html\">woocommerce_customer_meta_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-profile.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5747
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_customer_reset_password</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5754
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_customer_save_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5761
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer.html\">woocommerce_customer_taxable_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5767
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Dashboard.html\">woocommerce_dashboard_status_widget_top_seller_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5774
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Data-Store.html\">woocommerce_data_stores</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-data-store.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5780
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_date_format\">woocommerce_date_format</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5787
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_default_address_fields</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5793
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_default_catalog_orderby</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5799
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shop-Customizer.html\">woocommerce_default_catalog_orderby_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shop-customizer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5806
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_default_order_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5813
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_defer_transactional_emails</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5819
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_delete_email_template</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5825
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">woocommerce_delete_inactive_account_roles</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5832
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Data.html\">woocommerce_delete_order_downloadable_permissions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5839
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_order_item\">woocommerce_delete_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-item-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5846
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Data.html\">woocommerce_delete_order_items</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5852
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_product_transients\">woocommerce_delete_product_transients</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5859
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_delete_shop_order_transients\">woocommerce_delete_shop_order_transients</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5866
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cache-Helper.html\">woocommerce_delete_version_transients_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cache-helper.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5873
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Data.html\">woocommerce_deleted_order_downloadable_permissions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5880
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Data.html\">woocommerce_deleted_order_items</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5886
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_disable_admin_bar\">woocommerce_disable_admin_bar</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php, class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5893
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin.html\">woocommerce_display_admin_footer_text</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5899
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_docs_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5905
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Download-Handler.html\">woocommerce_download_file_\$FILE_DOWNLOAD_METHOD</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-download-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5912
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Download-Handler.html\">woocommerce_download_product</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-download-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5918
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Download.html\">woocommerce_downloadable_file_allowed_mime_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-download.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5925
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Download.html\">woocommerce_downloadable_file_exists</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-download.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_downloadable_file_permission\">woocommerce_downloadable_file_permission</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5939
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_available_downloads\">woocommerce_downloadable_product_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5946
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Duplicate-Product.html\">woocommerce_duplicate_product_capability</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-duplicate-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5953
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Duplicate-Product.html\">woocommerce_duplicate_product_exclude_children</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-duplicate-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5960
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Duplicate-Product.html\">woocommerce_duplicate_product_exclude_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-duplicate-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5967
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-ECheck.html\">woocommerce_echeck_form_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-echeck.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5974
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-ECheck.html\">woocommerce_echeck_form_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-echeck.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5981
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway-ECheck.html\">woocommerce_echeck_form_start</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateway-echeck.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 5988
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_edit_address_i18n\">woocommerce_edit_address_slugs</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a href=\"";
        // line 5994
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6001
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_actions</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6007
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_attachments</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php, class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6013
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_classes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6019
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_content_backorder</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6025
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_content_low_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6031
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_content_no_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6037
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_customer_details_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6044
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_description</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6050
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_downloads_columns</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6056
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_enabled_\$THIS->ID</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6062
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_footer</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6068
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_format_string</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6074
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_format_string_find</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6080
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_format_string_replace</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6086
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_from_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6092
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_from_name</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6098
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_get_option</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_header</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_headers</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php, class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_heading_\$THIS->ID</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6122
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Invoice.html\">woocommerce_email_heading_customer_invoice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-invoice.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Invoice.html\">woocommerce_email_heading_customer_invoice_paid</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-invoice.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Refunded-Order.html\">woocommerce_email_heading_customer_refunded_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-refunded-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_email_order_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6150
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_order_meta_fields</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_order_meta_keys</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6162
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_recipient_\$THIS->ID</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6168
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_recipient_backorder</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_recipient_low_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6180
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_recipient_no_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_restore_locale</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_settings_after</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6198
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_settings_before</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_setup_locale</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_styles</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_subject_\$THIS->ID</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_subject_backorder</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Invoice.html\">woocommerce_email_subject_customer_invoice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-invoice.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Invoice.html\">woocommerce_email_subject_customer_invoice_paid</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-invoice.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6242
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email-Customer-Refunded-Order.html\">woocommerce_email_subject_customer_refunded_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email-customer-refunded-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_subject_low_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6255
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Emails.html\">woocommerce_email_subject_no_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-emails.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6261
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_email_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_empty_cart_when_order_again</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_empty_price_html</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6280
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin.html\">woocommerce_enable_admin_help_tab</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6286
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_enable_auto_update_db</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6292
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_enable_setup_wizard</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php, class-wc-admin-setup-wizard.php,
                        class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_endpoint_\$ENDPOINT_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_enqueue_styles</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Exporters.html\">woocommerce_export_get_ajax_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6318
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Download-Handler.html\">woocommerce_file_download_filename</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-download-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Download-Handler.html\">woocommerce_file_download_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-download-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6332
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_find_rates</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6338
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_flush_rewrite_rules</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php, wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6344
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-HTTPS.html\">woocommerce_force_ssl_checkout</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-https.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6350
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_content\">woocommerce_format_content</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6357
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_dimensions\">woocommerce_format_dimensions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6364
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_localized_decimal\">woocommerce_format_localized_decimal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_localized_price\">woocommerce_format_localized_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6378
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Log-Handler.html\">woocommerce_format_log_entry</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-log-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_postcode\">woocommerce_format_postcode</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_price_range\">woocommerce_format_price_range</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6398
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_sale_price\">woocommerce_format_sale_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6405
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_stock_quantity_for_display\">woocommerce_format_stock_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6412
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_weight\">woocommerce_format_weight</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6419
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_formatted_address_force_country_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6426
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_formatted_address_replacements</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6433
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Refund.html\">woocommerce_formatted_refund_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-refund.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6440
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_attachment_props\">woocommerce_gallery_full_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6447
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_attachment_props\">woocommerce_gallery_image_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6454
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_attachment_props\">woocommerce_gallery_thumbnail_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6461
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_gateway_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6468
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_gateway_icon</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6474
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_gateway_method_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6481
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_gateway_method_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6488
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_gateway_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6494
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_generate_order_key\">woocommerce_generate_order_key</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6501
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocate_ip</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6507
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cache-Helper.html\">woocommerce_geolocation_ajax_get_location_hash</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cache-helper.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6514
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_geoip_apis</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6521
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_geoip_response_\$SERVICE_NAME</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6528
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_ip_lookup_api_response</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6535
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_ip_lookup_apis</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6542
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_local_database_path</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6549
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Geolocation.html\">woocommerce_geolocation_update_database_periodically</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-geolocation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6556
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_page_id\">woocommerce_get_\$PAGE_page_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-page-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6563
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_page_permalink\">woocommerce_get_\$PAGE_page_permalink</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-page-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6570
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_get_asset_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6576
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_get_availability</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6582
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_get_availability_class</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_get_availability_text</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6594
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_base_location\">woocommerce_get_base_location</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Breadcrumb.html\">woocommerce_get_breadcrumb</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-breadcrumb.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6607
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_cancel_order_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6613
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_cancel_order_url_raw</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6619
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_get_cart_contents</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6625
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_get_cart_item_from_session</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6632
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_get_cart_tax</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6638
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_cart_url\">woocommerce_get_cart_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6645
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_get_catalog_ordering_args</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6651
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_checkout_order_received_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6658
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_checkout_payment_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6664
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_checkout_url\">woocommerce_get_checkout_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6671
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_get_children</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6677
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_get_country_locale</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6683
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_get_country_locale_base</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6689
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_get_country_locale_default</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6696
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_coupon_id_by_code\">woocommerce_get_coupon_id_from_code</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-coupon-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6703
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_credit_card_type_label\">woocommerce_get_credit_card_type_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6710
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Tokens.html\">woocommerce_get_customer_payment_tokens</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-tokens.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6717
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Totals.html\">woocommerce_get_discounted_price</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-totals.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_edit_order_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6729
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_endpoint_url\">woocommerce_get_endpoint_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-page-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6736
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_formatted_order_total</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php, abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6742
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_image_size\">woocommerce_get_image_size_\$IMAGE_SIZE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6749
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_get_item_count</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6755
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_item_count_refunded</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6761
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Product.html\">woocommerce_get_item_downloads</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6768
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_get_items_key</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6774
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_min_max_price_meta_query\">woocommerce_get_min_max_price_meta_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-deprecated-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6781
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_order_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6787
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_get_order_currency</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6794
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Factory.html\">woocommerce_get_order_item_classname</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-factory.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6801
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_order_item_totals</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php, abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6807
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_get_order_item_totals_excl_free_fees</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6814
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_order_note\">woocommerce_get_order_note</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6821
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Tokens.html\">woocommerce_get_order_payment_tokens</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-tokens.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6828
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_excluding_tax\">woocommerce_get_price_excluding_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6835
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped.html\">woocommerce_get_price_html</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped.php, class-wc-product-variable.php,
                        abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6842
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">woocommerce_get_price_html_from_to</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6849
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_price_including_tax\">woocommerce_get_price_including_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6856
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_get_price_suffix</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6862
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Product.html\">woocommerce_get_product_from_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-product.php, abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6869
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_terms\">woocommerce_get_product_terms</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-term-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6876
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_get_query_vars</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6882
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_get_related_product_cat_terms</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6889
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_get_related_product_tag_terms</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6896
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_get_return_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6902
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_get_script_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6908
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_get_settings_pages</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6914
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_get_shipping_classes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6920
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_get_shipping_tax</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6926
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Coupon.html\">woocommerce_get_shop_coupon_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-coupon.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_get_tax_location</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6938
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_get_transaction_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6945
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_get_variation_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6952
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_get_variation_regular_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6959
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_get_variation_sale_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6966
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_get_view_order_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6972
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_downloadable_product_permissions\">woocommerce_grant_product_download_permissions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6979
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped.html\">woocommerce_grouped_empty_price_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6986
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped.html\">woocommerce_grouped_free_price_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 6993
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped.html\">woocommerce_grouped_price_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7000
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Addons.html\">woocommerce_helper_output</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-addons.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7006
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Notices.html\">woocommerce_hide_\$HIDE_NOTICE_notice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-notices.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7013
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_hide_invisible_variations</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7020
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Regenerate-Images.html\">woocommerce_image_sizes_to_resize</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-regenerate-images.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7027
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_include_processing_order_count_in_menu</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7034
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7040
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_install_get_tables</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7046
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_install_skip_create_files</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7052
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_installed</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7058
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Integration.html\">woocommerce_integration_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-integration.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7065
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Integration.html\">woocommerce_integration_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-integration.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7071
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Integrations.html\">woocommerce_integrations</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-integrations.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7077
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Integrations.html\">woocommerce_integrations_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-integrations.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7083
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_is_account_page\">woocommerce_is_account_page</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7090
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_is_attribute_in_product_name\">woocommerce_is_attribute_in_product_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-attribute-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7097
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_is_checkout\">woocommerce_is_checkout</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_is_downloadable</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_is_filtered\">woocommerce_is_filtered</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_is_order_received_page\">woocommerce_is_order_received_page</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-conditional-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7124
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-External.html\">woocommerce_is_purchasable</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-external.php, class-wc-product-grouped.php,
                        abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_is_rest_api_request</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_is_sold_individually</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_is_virtual</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7149
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_json_search_found_categories</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_json_search_found_customers</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7161
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_json_search_found_products</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_json_search_limit</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7173
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_layered_nav_default_query_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7180
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_load_cart_from_session</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_load_shipping_methods</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_load_webhooks_limit</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_loaded</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7205
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Customer.html\">woocommerce_local_pickup_methods</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-customer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_localisation_address_formats</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_locate_core_template</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7224
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_locate_template\">woocommerce_locate_template</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Log-Handler-File.html\">woocommerce_log_clear</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-log-handler-file.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Log-Handler-File.html\">woocommerce_log_file_size_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-log-handler-file.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Log-Handler-File.html\">woocommerce_log_remove</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-log-handler-file.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Logger.html\">woocommerce_logger_add_message</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-logger.php, class-wc-log-handler-file.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Logger.html\">woocommerce_logger_days_to_retain_logs</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-logger.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Logger.html\">woocommerce_logger_log_message</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-logger.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7268
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_logger\">woocommerce_logging_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7275
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_login_credentials</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_login_failed</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7287
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_login_redirect</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7293
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_trigger_stock_change_notifications\">woocommerce_low_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7300
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_mail_callback</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_mail_callback_params</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7312
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_mail_content</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php, class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7318
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_matched_rates</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7324
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_matched_tax_rates</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7330
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_max_webhook_delivery_failures</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7337
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_min_password_strength</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7344
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_formatted_address\">woocommerce_my_account_my_address_formatted_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7351
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_orders_actions\">woocommerce_my_account_my_orders_actions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7358
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_orders_columns\">woocommerce_my_account_my_orders_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_my_account_shortcode_tag</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_new_customer\">woocommerce_new_customer_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7378
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_new_customer_note</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_add_order_item\">woocommerce_new_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-item-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_new_order_note_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7397
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_trigger_stock_change_notifications\">woocommerce_no_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7404
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_print_notices\">woocommerce_notice_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-notice-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7411
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_after_calculate_totals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7418
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_order_again_cart_item_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7425
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_item_subtotal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7432
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_item_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7439
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_item_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7446
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_line_subtotal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7453
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_line_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7460
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_amount_line_total</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7467
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_before_calculate_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7474
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_before_calculate_totals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7481
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_order_cancelled_notice</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7488
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_order_cancelled_notice_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7495
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Factory.html\">woocommerce_order_class</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-factory.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7501
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_discount_to_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7508
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_order_edit_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7515
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_order_edit_status</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php, class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7521
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_formatted_billing_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7528
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_formatted_line_subtotal</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7535
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_formatted_shipping_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7542
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_order_fully_refunded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7549
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_order_fully_refunded_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7556
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_get_downloadable_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7563
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_get_items</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7569
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_get_subtotal</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7575
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_get_tax_totals</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7582
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_get_total_discount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7589
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_has_status</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7595
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_hide_shipping_address</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_hide_zero_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_is_download_permitted</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7614
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_is_paid</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7620
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_is_paid_statuses\">woocommerce_order_is_paid_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7627
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_is_pending_statuses\">woocommerce_order_is_pending_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7634
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_is_vat_exempt</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7641
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item.html\">woocommerce_order_item_after_calculate_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7648
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item.html\">woocommerce_order_item_display_meta_key</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7655
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Meta.html\">woocommerce_order_item_display_meta_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-meta.php, class-wc-order-item.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7662
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Fee.html\">woocommerce_order_item_fee_after_calculate_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-fee.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7669
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item.html\">woocommerce_order_item_get_formatted_meta_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7676
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_order_item_name</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7682
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_item_needs_processing</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7688
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Product.html\">woocommerce_order_item_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7695
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_reduce_stock_levels\">woocommerce_order_item_quantity</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7702
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Shipping.html\">woocommerce_order_item_shipping_after_calculate_taxes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7709
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_order_item_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7716
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Meta.html\">woocommerce_order_items_meta_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-meta.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Item-Meta.html\">woocommerce_order_items_meta_get_formatted</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-item-meta.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7730
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_needs_payment</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7736
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_needs_shipping_address</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7743
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_order_note_class</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7749
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_number</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7755
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_order_partially_refunded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7762
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Query.html\">woocommerce_order_query</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7768
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order-Query.html\">woocommerce_order_query_args</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7774
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_recalculate_coupons_coupon_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7781
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_order_refunded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7788
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_shipping_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7795
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_shipping_to_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7802
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_shipping_to_display_shipped_via</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7809
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_shipping_to_display_tax_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7816
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_status_\$STATUS_TRANSITION[from]_to_\$STATUS_TRANSITION[to]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_status_\$STATUS_TRANSITION[to]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7830
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_order_status_changed</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7836
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_subtotal_to_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7843
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_order_type_to_group</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7850
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_order_update_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7857
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_order_update_fee</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7864
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_order_update_shipping</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7871
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Order.html\">woocommerce_order_update_tax</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7878
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_package_rates</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7884
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_payment_complete</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7890
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_payment_complete_order_status</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7897
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_payment_complete_order_status_\$THIS->GET_STATUS</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7904
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_maybe_reduce_stock_levels\">woocommerce_payment_complete_reduce_order_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7911
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_payment_gateway_get_new_payment_method_option_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7918
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_payment_gateway_get_new_payment_method_option_html_label</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7925
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_payment_gateway_get_saved_payment_method_option_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_payment_gateway_save_new_payment_method_option_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7939
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateway.html\">woocommerce_payment_gateway_supports</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-payment-gateway.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7946
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Gateways.html\">woocommerce_payment_gateways</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-gateways.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7952
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_saved_payment_methods_list\">woocommerce_payment_methods_list_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7959
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_account_payment_methods_types\">woocommerce_payment_methods_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7966
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_payment_successful_result</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php, class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7973
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Order.html\">woocommerce_payment_token_added_to_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7980
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Payment-Tokens.html\">woocommerce_payment_token_set_default</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-payment-tokens.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7987
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_download_permissions\">woocommerce_permission_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 7994
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_persistent_cart_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php, wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8001
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_placeholder_img\">woocommerce_placeholder_img</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8008
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_placeholder_img_src\">woocommerce_placeholder_img_src</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8015
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_customer_bought_product\">woocommerce_pre_customer_bought_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8022
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_pre_payment_complete</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8028
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_pre_remove_cart_item_from_session</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8035
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin.html\">woocommerce_prevent_admin_access</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8041
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin.html\">woocommerce_prevent_automatic_wizard_redirect</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8048
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_price_ex_tax_amount</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8054
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_price_filter_widget_tax_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8061
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_get_woocommerce_price_format\">woocommerce_price_format</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8068
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_price_inc_tax_amount</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8074
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_price\">woocommerce_price_trim_zeros</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8081
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_print_r\">woocommerce_print_r_alternatives</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8088
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_before_remove_order_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8095
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_customer_personal_data_prop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8102
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_customer_personal_data_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_download_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_order_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_personal_data_customer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8130
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_erase_personal_data_tokens</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_customer_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8144
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_customer_personal_data_prop_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_customer_personal_data_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_download_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_order_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_order_personal_data_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_order_personal_data_meta_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_order_personal_data_prop</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Exporters.html\">woocommerce_privacy_export_order_personal_data_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-exporters.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8200
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_remove_order_personal_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_remove_order_personal_data_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_remove_order_personal_data_meta_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_remove_order_personal_data_prop_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy-Erasers.html\">woocommerce_privacy_remove_order_personal_data_props</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy-erasers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Meta-Boxes.html\">woocommerce_process_\$POST->POST_TYPE_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-meta-boxes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8242
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_process_checkout_\$TYPE_field</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_process_checkout_field_\$KEY</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_process_login_errors</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_process_myaccount_field_\$KEY</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8269
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_process_registration_errors</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8276
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Meta-Boxes.html\">woocommerce_process_shop_order_meta</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-meta-boxes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8283
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-External.html\">woocommerce_product_add_to_cart_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-external.php, class-wc-product-grouped.php,
                        class-wc-product-simple.php, class-wc-product-variable.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8291
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-External.html\">woocommerce_product_add_to_cart_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-external.php, class-wc-product-grouped.php,
                        class-wc-product-simple.php, class-wc-product-variable.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-External.html\">woocommerce_product_add_to_cart_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-external.php, class-wc-product-simple.php,
                        class-wc-product-variation.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_backorders_allowed</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_backorders_require_notification</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8321
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Post-Types.html\">woocommerce_product_bulk_and_quick_edit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8328
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Post-Types.html\">woocommerce_product_bulk_edit_save</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shortcodes.html\">woocommerce_product_categories</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shortcodes.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8341
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Factory.html\">woocommerce_product_class</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-factory.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8347
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_coupon_types\">woocommerce_product_coupon_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-coupon-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8354
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">woocommerce_product_crosssell_ids</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8361
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">woocommerce_product_default_attributes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8368
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_dimensions</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8374
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Duplicate-Product.html\">woocommerce_product_duplicate</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-duplicate-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8381
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Duplicate-Product.html\">woocommerce_product_duplicate_before_save</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-duplicate-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8388
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_\$THIS->EXPORT_TYPE_column_\$COLUMN_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8395
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_\$THIS->EXPORT_TYPE_default_columns</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_\$THIS->EXPORT_TYPE_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8409
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_meta_value</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_row_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8423
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Exporter.html\">woocommerce_product_export_skip_meta_keys</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-exporter.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_file</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8436
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_file_download_path</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8443
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_get_image</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8449
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Importers.html\">woocommerce_product_import_batch_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-importers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8456
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Importer.html\">woocommerce_product_import_before_import</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8463
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_import_before_process_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8470
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_import_get_product_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8477
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_import_inserted_product_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8484
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_import_pre_insert_product_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8491
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Importer.html\">woocommerce_product_importer_before_set_parsed_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8498
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_importer_default_time_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8505
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Importer.html\">woocommerce_product_importer_formatting_callbacks</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8512
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_importer_memory_exceeded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8519
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_importer_parsed_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php, class-wc-product-csv-importer.php
                    </td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8527
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-CSV-Importer.html\">woocommerce_product_importer_pre_expand_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-csv-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8534
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_product_importer_time_exceeded</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8541
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_is_in_stock</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8547
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Grouped.html\">woocommerce_product_is_on_sale</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-grouped.php, class-wc-product-variable.php,
                        abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8555
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_is_taxable</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8561
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_is_visible</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8567
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_needs_shipping</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8573
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Query.html\">woocommerce_product_object_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8580
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Query.html\">woocommerce_product_object_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8587
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_trigger_stock_change_notifications\">woocommerce_product_on_backorder</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8594
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">woocommerce_product_parent</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_product_query</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8607
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_product_query_meta_query</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8613
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Query.html\">woocommerce_product_query_tax_query</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-query.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8619
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Post-Types.html\">woocommerce_product_quick_edit_save</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8626
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_product_related_posts_force_display</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8633
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_product_related_posts_relate_by_category</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8640
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_product_related_posts_relate_by_tag</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8647
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_product_stock\">woocommerce_product_set_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8654
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-External.html\">woocommerce_product_single_add_to_cart_text</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-external.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8661
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_stock_status_options\">woocommerce_product_stock_status_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8668
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product.html\">woocommerce_product_supports</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8674
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_attachment_props\">woocommerce_product_thumbnails_large_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8681
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">woocommerce_product_title</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php, abstract-wc-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8687
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Factory.html\">woocommerce_product_type_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-factory.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8694
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Abstract-Legacy-Product.html\">woocommerce_product_upsell_ids</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-legacy-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8701
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_visibility_options\">woocommerce_product_visibility_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8708
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Queue.html\">woocommerce_queue_class</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-queue.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8714
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_print_js\">woocommerce_queued_js</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_rate_code</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8727
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_rate_compound</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8733
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_rate_label</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8739
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_rate_percent</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8745
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_total_sales_counts\">woocommerce_recorded_sales</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8752
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_reduce_stock_levels\">woocommerce_reduce_order_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8759
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_refund\">woocommerce_refund_created</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8766
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_refund_deleted</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8772
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Regenerate-Images-Request.html\">woocommerce_regenerate_images_intermediate_image_sizes</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-regenerate-images-request.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8779
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Logger.html\">woocommerce_register_log_handlers</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-logger.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8785
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_new_customer\">woocommerce_register_post</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8792
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8798
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8805
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type_product_variation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8812
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type_shop_coupon</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8819
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type_shop_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8826
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_post_type_shop_order_refund</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8833
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_shop_order_post_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8840
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_register_taxonomy</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8846
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_registration_auth_new_customer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8853
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_new_customer\">woocommerce_registration_error_email_exists</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8860
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_create_new_customer\">woocommerce_registration_errors</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8867
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_registration_redirect</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8874
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_related_products\">woocommerce_related_products</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8881
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_remove_cart_item</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8887
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_remove_cart_item_from_session</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8894
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_removed_coupon</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8900
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Dashboard.html\">woocommerce_report_recent_reviews_query_from</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8907
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Reports.html\">woocommerce_reports_charts</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-reports.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8913
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Dashboard.html\">woocommerce_reports_order_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-dashboard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8920
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Assets.html\">woocommerce_reports_screen_ids</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-assets.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8926
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Regenerate-Images.html\">woocommerce_resize_images</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-regenerate-images.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Controller.html\">woocommerce_rest_\$OBJECT_TYPE_schema</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8939
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Terms-Controller.html\">woocommerce_rest_\$TAXONOMY_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-terms-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8946
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-CRUD-Controller.html\">woocommerce_rest_\$THIS->POST_TYPE_object_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-crud-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8953
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-CRUD-Controller.html\">woocommerce_rest_\$THIS->POST_TYPE_object_trashable</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-crud-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8960
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_\$THIS->POST_TYPE_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8967
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_\$THIS->POST_TYPE_trashable</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8974
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_rest_allowed_image_mime_types\">woocommerce_rest_allowed_image_mime_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-rest-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8981
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_rest_upload_image_from_url\">woocommerce_rest_api_uploaded_image_from_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-rest-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8988
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Controller.html\">woocommerce_rest_batch_items_limit</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 8995
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_rest_check_post_permissions\">woocommerce_rest_check_permissions</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-rest-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9002
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Terms-Controller.html\">woocommerce_rest_delete_\$TAXONOMY</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-terms-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9009
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_delete_\$THIS->POST_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9016
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-CRUD-Controller.html\">woocommerce_rest_delete_\$THIS->POST_TYPE_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-crud-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9023
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_delete_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9030
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Terms-Controller.html\">woocommerce_rest_insert_\$TAXONOMY</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-terms-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9037
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_insert_\$THIS->POST_TYPE</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9044
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-CRUD-Controller.html\">woocommerce_rest_insert_\$THIS->POST_TYPE_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-crud-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9051
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Order-Notes-Controller.html\">woocommerce_rest_insert_order_note</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-order-notes-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9058
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_insert_product_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9065
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Authentication.html\">woocommerce_rest_is_request_to_rest_api</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-authentication.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9072
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Order-Refunds-Controller.html\">woocommerce_rest_pre_insert_\$THIS->POST_TYPE_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-order-refunds-controller.php,
                        class-wc-rest-orders-controller.php, class-wc-rest-product-variations-controller.php,
                        class-wc-rest-products-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9081
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_pre_insert_product_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9088
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Variations-Controller.html\">woocommerce_rest_prepare_\$THIS->POST_TYPE_object</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-variations-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9095
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Categories-Controller.html\">woocommerce_rest_prepare_\$THIS->TAXONOMY</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-categories-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9102
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Data-Continents-Controller.html\">woocommerce_rest_prepare_data_continent</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-data-continents-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Data-Countries-Controller.html\">woocommerce_rest_prepare_data_country</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-data-countries-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Data-Currencies-Controller.html\">woocommerce_rest_prepare_data_currency</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-data-currencies-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Order-Notes-Controller.html\">woocommerce_rest_prepare_order_note</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-order-notes-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9130
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Payment-Gateways-Controller.html\">woocommerce_rest_prepare_payment_gateway</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-payment-gateways-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_prepare_product_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9144
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Report-Coupons-Totals-Controller.html\">woocommerce_rest_prepare_report_coupons_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-report-coupons-totals-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Report-Customers-Totals-Controller.html\">woocommerce_rest_prepare_report_customers_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-report-customers-totals-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Report-Orders-Totals-Controller.html\">woocommerce_rest_prepare_report_orders_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-report-orders-totals-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Report-Products-Totals-Controller.html\">woocommerce_rest_prepare_report_products_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-report-products-totals-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Report-Reviews-Totals-Controller.html\">woocommerce_rest_prepare_report_reviews_count</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-report-reviews-totals-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_preprocess_product_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_private_query_vars</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_product_review_collection_params</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9200
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_product_review_query</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Reviews-Controller.html\">woocommerce_rest_product_review_trashable</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-reviews-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_query_var-\$VAR</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Posts-Controller.html\">woocommerce_rest_query_vars</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-rest-posts-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Product-Variations-Controller.html\">woocommerce_rest_suppress_image_upload_error</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-product-variations-controller.php,
                        class-wc-rest-products-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_restock_refunded_items\">woocommerce_restock_refunded_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart.html\">woocommerce_restore_cart_item</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_increase_stock_levels\">woocommerce_restore_order_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Checkout.html\">woocommerce_resume_order</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-checkout.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_save_account_details</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9268
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_save_account_details_required_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9275
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_save_settings_\$CURRENT_TAB</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9282
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_save_settings_\$CURRENT_TAB_\$CURRENT_SECTION</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9289
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_save_order_items\">woocommerce_saved_order_items</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-admin-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9296
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_customer_saved_methods_list\">woocommerce_saved_payment_methods_list</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9303
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_screen_ids\">woocommerce_screen_ids</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-admin-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_session_handler</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php, wc-core-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9316
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_set_cart_cookies</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9322
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-REST-Setting-Options-Controller.html\">woocommerce_settings-\$GROUP_ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-rest-setting-options-controller.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9329
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Settings-API.html\">woocommerce_settings_api_form_fields_\$THIS->ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-settings-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9336
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Settings-API.html\">woocommerce_settings_api_sanitized_fields_\$THIS->ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-settings-api.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9343
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_settings_page_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9349
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_sanitize_title\$VALUE[id]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_sanitize_title\$VALUE[id]_after</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9363
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_sanitize_title\$VALUE[id]_end</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9370
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_save_\$CURRENT_TAB</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9377
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_saved</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9383
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_start</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9389
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_settings_tabs_array</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9396
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Setup-Wizard.html\">woocommerce_setup_footer</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-setup-wizard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Setup-Wizard.html\">woocommerce_setup_wizard_steps</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-setup-wizard.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9409
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_\$THIS->ID_instance_option</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_\$THIS->ID_instance_settings_values</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9423
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_\$THIS->ID_is_available</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_\$THIS->ID_option</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9437
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_shipping_address_map_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9443
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_shipping_address_map_url_parts</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9450
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_default_shipping_method_for_package\">woocommerce_shipping_chosen_method</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9457
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_shipping_classes_save_class</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9463
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_shipping_init</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9469
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_instance_form_fields_\$THIS->ID</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9476
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_method_add_rate</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9483
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_method_add_rate_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9490
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_chosen_shipping_method_for_package\">woocommerce_shipping_method_chosen</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9497
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_method_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9504
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_method_supports</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9511
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Method.html\">woocommerce_shipping_method_title</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-shipping-method.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9518
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_shipping_methods</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9524
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_shipping_html\">woocommerce_shipping_package_details_array</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9531
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_cart_totals_shipping_html\">woocommerce_shipping_package_name</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-cart-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9538
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping.html\">woocommerce_shipping_packages</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9544
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_cost</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9550
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_id</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9556
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_instance_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9563
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_label</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9569
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_method_id</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9576
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Rate.html\">woocommerce_shipping_rate_taxes</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-rate.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9582
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone.html\">woocommerce_shipping_zone_method_added</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9589
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_shipping_zone_method_deleted</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php, class-wc-shipping-zone.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9595
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_shipping_zone_method_status_toggled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9602
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone.html\">woocommerce_shipping_zone_shipping_methods</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9609
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_rest_check_user_permissions\">woocommerce_shop_manager_editable_roles</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-rest-functions.php, wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9616
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_format_content\">woocommerce_short_description</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php, class-wc-block-featured-product.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9623
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_show_addons_page</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9629
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Menus.html\">woocommerce_show_admin_bar_visit_store</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-menus.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9636
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Notices.html\">woocommerce_show_admin_notice</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-notices.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9642
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_show_variation_price</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9649
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_shutdown_error</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9655
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_carousel_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9662
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_flexslider_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9669
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_photoswipe_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9676
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_photoswipe_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9683
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_zoom_enabled</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9690
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_single_product_zoom_options</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9697
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_sort_countries</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9703
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_change_get_terms_defaults\">woocommerce_sortable_taxonomies</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-term-functions.php, class-wc-admin-assets.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9710
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Countries.html\">woocommerce_states</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-countries.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9716
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_stock_amount\">woocommerce_stock_amount</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_stock_amount_cart_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9730
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_breadcrumblist</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9737
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_context</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9744
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9751
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_product</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9758
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_product_offer</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9765
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_review</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9772
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_type_for_page</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9779
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Structured-Data.html\">woocommerce_structured_data_website</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-structured-data.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9786
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Frontend-Scripts.html\">woocommerce_style_smallscreen_breakpoint</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-frontend-scripts.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9793
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_support_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9799
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Status.html\">woocommerce_system_status_tool_executed</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-status.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9806
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_tax_rate_added</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9812
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_tax_rate_deleted</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9818
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_tax_rate_updated</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9824
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tax.html\">woocommerce_tax_round</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9830
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_\$NAME</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9836
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_taxonomy_args_\$TAXONOMY_NAME</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9843
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Importers.html\">woocommerce_taxonomy_args_\$TERM[domain]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-importers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9850
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_product_cat</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9857
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_product_shipping_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9864
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_product_tag</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9871
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_product_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9878
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_args_product_visibility</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9885
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_\$NAME</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9891
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Importer.html\">woocommerce_taxonomy_objects_\$TAXONOMY_NAME</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-product-importer.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9898
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Importers.html\">woocommerce_taxonomy_objects_\$TERM[domain]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-importers.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9905
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_product_cat</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9912
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_product_shipping_class</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9919
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_product_tag</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9926
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_product_type</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9933
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Post-Types.html\">woocommerce_taxonomy_objects_product_visibility</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-post-types.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9940
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Email.html\">woocommerce_template_directory</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-email.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9946
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Template-Loader.html\">woocommerce_template_loader_files</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-template-loader.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9953
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_template_overrides_scan_paths</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9960
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WooCommerce.html\">woocommerce_template_path</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-woocommerce.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9966
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_product_attachment_props\">woocommerce_thumbnail_size</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-product-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9973
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_time_format\">woocommerce_time_format</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-formatting-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9980
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_tracker_admin_email</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9986
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_tracker_data</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9992
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_tracker_event_recurrence</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 9998
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_tracker_last_send_interval</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10005
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_tracker_last_send_time</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10011
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Tracker.html\">woocommerce_tracker_send_override</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-tracker.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10017
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">woocommerce_trash_cancelled_orders_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10024
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">woocommerce_trash_failed_orders_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10031
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Privacy.html\">woocommerce_trash_pending_orders_query_args</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-privacy.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10038
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Twenty-Nineteen.html\">woocommerce_twenty_nineteen_styles</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-twenty-nineteen.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10045
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Twenty-Seventeen.html\">woocommerce_twenty_seventeen_styles</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-twenty-seventeen.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10052
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-HTTPS.html\">woocommerce_unforce_ssl_checkout</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-https.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10058
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_update_cart_action_cart_updated</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10065
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_update_cart_validation</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10072
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_new_customer_past_orders\">woocommerce_update_new_customer_past_order</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10079
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_update_option</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10085
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_update_option_sanitize_title\$OPTION[type]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10092
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_update_options</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10098
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Settings.html\">woocommerce_update_options_\$CURRENT_TAB</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-settings.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_order_item\">woocommerce_update_order_item</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-order-item-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-AJAX.html\">woocommerce_update_order_review_fragments</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-ajax.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Install.html\">woocommerce_updated</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-install.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_260_zone_methods\">woocommerce_updated_instance_ids</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-update-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10132
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_meta_update_last_update_time\">woocommerce_user_last_update_fields</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-user-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Shipping-Zone.html\">woocommerce_valid_location_types</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-shipping-zone.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Form-Handler.html\">woocommerce_valid_order_statuses_for_cancel</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-form-handler.php, wc-account-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10153
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Cart-Session.html\">woocommerce_valid_order_statuses_for_order_again</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-cart-session.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_valid_order_statuses_for_payment</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Order.html\">woocommerce_valid_order_statuses_for_payment_complete</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-order.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_is_webhook_valid_topic\">woocommerce_valid_webhook_events</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-webhook-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10181
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_is_webhook_valid_topic\">woocommerce_valid_webhook_resources</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-webhook-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10188
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Validation.html\">woocommerce_validate_postcode</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-validation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_variable_empty_price_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_variable_price_html</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10208
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variable.html\">woocommerce_variable_product_sync_data</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variable.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10215
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">woocommerce_variation_is_active</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">woocommerce_variation_is_purchasable</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10229
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Product-Variation.html\">woocommerce_variation_is_visible</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-product-variation.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_update_product_stock\">woocommerce_variation_set_stock</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">wc-stock-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_webhook_process_delivery\">woocommerce_webhook_deliver_async</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-webhook-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_delivery</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_delivery_url</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_disabled_due_delivery_failures</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10269
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_event</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10275
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_hash_algorithm</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_hooks</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10287
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_http_args</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10293
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_name</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Admin-Webhooks.html\">woocommerce_webhook_options_save</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-admin-webhooks.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_order_payload_filters</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10313
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_payload</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10319
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_process_delivery</a></td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_resource</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10331
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_secret</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10337
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_should_deliver</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10343
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_status</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10349
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "namespaces/default.html#function_wc_get_webhook_statuses\">woocommerce_webhook_statuses</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">wc-webhook-functions.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_topic</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10362
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Webhook.html\">woocommerce_webhook_topic_hooks</a></td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">class-wc-webhook.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10368
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget.html\">woocommerce_widget_field_\$SETTING[type]</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">action</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-widget.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10375
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget.html\">woocommerce_widget_get_current_page_url</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-widget.php</td>
                </tr>
                <tr>
                    <td class=\"phpdocumentor-cell\"><a
                            href=\"";
        // line 10382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "classes/WC-Widget.html\">woocommerce_widget_settings_sanitize_option</a>
                    </td>
                    <td class=\"phpdocumentor-cell\">filter</td>
                    <td class=\"phpdocumentor-cell\">abstract-wc-widget.php</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "hooks/hooks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  14287 => 10382,  14277 => 10375,  14267 => 10368,  14258 => 10362,  14249 => 10356,  14239 => 10349,  14230 => 10343,  14221 => 10337,  14212 => 10331,  14203 => 10325,  14194 => 10319,  14185 => 10313,  14175 => 10306,  14165 => 10299,  14156 => 10293,  14147 => 10287,  14138 => 10281,  14129 => 10275,  14120 => 10269,  14110 => 10262,  14101 => 10256,  14092 => 10250,  14082 => 10243,  14072 => 10236,  14062 => 10229,  14052 => 10222,  14042 => 10215,  14032 => 10208,  14022 => 10201,  14012 => 10194,  14003 => 10188,  13993 => 10181,  13983 => 10174,  13973 => 10167,  13963 => 10160,  13953 => 10153,  13943 => 10146,  13933 => 10139,  13923 => 10132,  13913 => 10125,  13904 => 10119,  13894 => 10112,  13884 => 10105,  13874 => 10098,  13865 => 10092,  13855 => 10085,  13846 => 10079,  13836 => 10072,  13826 => 10065,  13816 => 10058,  13807 => 10052,  13797 => 10045,  13787 => 10038,  13777 => 10031,  13767 => 10024,  13757 => 10017,  13748 => 10011,  13739 => 10005,  13729 => 9998,  13720 => 9992,  13711 => 9986,  13702 => 9980,  13692 => 9973,  13682 => 9966,  13673 => 9960,  13663 => 9953,  13653 => 9946,  13644 => 9940,  13634 => 9933,  13624 => 9926,  13614 => 9919,  13604 => 9912,  13594 => 9905,  13584 => 9898,  13574 => 9891,  13565 => 9885,  13555 => 9878,  13545 => 9871,  13535 => 9864,  13525 => 9857,  13515 => 9850,  13505 => 9843,  13495 => 9836,  13486 => 9830,  13477 => 9824,  13468 => 9818,  13459 => 9812,  13450 => 9806,  13440 => 9799,  13431 => 9793,  13421 => 9786,  13411 => 9779,  13401 => 9772,  13391 => 9765,  13381 => 9758,  13371 => 9751,  13361 => 9744,  13351 => 9737,  13341 => 9730,  13331 => 9723,  13321 => 9716,  13312 => 9710,  13302 => 9703,  13293 => 9697,  13283 => 9690,  13273 => 9683,  13263 => 9676,  13253 => 9669,  13243 => 9662,  13233 => 9655,  13224 => 9649,  13214 => 9642,  13205 => 9636,  13195 => 9629,  13186 => 9623,  13176 => 9616,  13166 => 9609,  13156 => 9602,  13146 => 9595,  13137 => 9589,  13127 => 9582,  13118 => 9576,  13108 => 9569,  13099 => 9563,  13089 => 9556,  13080 => 9550,  13071 => 9544,  13062 => 9538,  13052 => 9531,  13042 => 9524,  13033 => 9518,  13023 => 9511,  13013 => 9504,  13003 => 9497,  12993 => 9490,  12983 => 9483,  12973 => 9476,  12963 => 9469,  12954 => 9463,  12945 => 9457,  12935 => 9450,  12925 => 9443,  12916 => 9437,  12906 => 9430,  12896 => 9423,  12886 => 9416,  12876 => 9409,  12866 => 9402,  12857 => 9396,  12847 => 9389,  12838 => 9383,  12829 => 9377,  12819 => 9370,  12809 => 9363,  12799 => 9356,  12789 => 9349,  12780 => 9343,  12770 => 9336,  12760 => 9329,  12750 => 9322,  12741 => 9316,  12732 => 9310,  12722 => 9303,  12712 => 9296,  12702 => 9289,  12692 => 9282,  12682 => 9275,  12672 => 9268,  12663 => 9262,  12654 => 9256,  12644 => 9249,  12635 => 9243,  12625 => 9236,  12614 => 9228,  12604 => 9221,  12594 => 9214,  12584 => 9207,  12574 => 9200,  12564 => 9193,  12554 => 9186,  12544 => 9179,  12534 => 9172,  12524 => 9165,  12514 => 9158,  12504 => 9151,  12494 => 9144,  12484 => 9137,  12474 => 9130,  12464 => 9123,  12454 => 9116,  12444 => 9109,  12434 => 9102,  12424 => 9095,  12414 => 9088,  12404 => 9081,  12392 => 9072,  12382 => 9065,  12372 => 9058,  12362 => 9051,  12352 => 9044,  12342 => 9037,  12332 => 9030,  12322 => 9023,  12312 => 9016,  12302 => 9009,  12292 => 9002,  12282 => 8995,  12272 => 8988,  12262 => 8981,  12252 => 8974,  12242 => 8967,  12232 => 8960,  12222 => 8953,  12212 => 8946,  12202 => 8939,  12192 => 8932,  12183 => 8926,  12174 => 8920,  12164 => 8913,  12155 => 8907,  12145 => 8900,  12136 => 8894,  12126 => 8887,  12117 => 8881,  12107 => 8874,  12097 => 8867,  12087 => 8860,  12077 => 8853,  12067 => 8846,  12058 => 8840,  12048 => 8833,  12038 => 8826,  12028 => 8819,  12018 => 8812,  12008 => 8805,  11998 => 8798,  11989 => 8792,  11979 => 8785,  11970 => 8779,  11960 => 8772,  11951 => 8766,  11941 => 8759,  11931 => 8752,  11921 => 8745,  11912 => 8739,  11903 => 8733,  11894 => 8727,  11885 => 8721,  11875 => 8714,  11866 => 8708,  11856 => 8701,  11846 => 8694,  11836 => 8687,  11827 => 8681,  11817 => 8674,  11808 => 8668,  11798 => 8661,  11788 => 8654,  11778 => 8647,  11768 => 8640,  11758 => 8633,  11748 => 8626,  11738 => 8619,  11729 => 8613,  11720 => 8607,  11711 => 8601,  11701 => 8594,  11691 => 8587,  11681 => 8580,  11671 => 8573,  11662 => 8567,  11653 => 8561,  11644 => 8555,  11633 => 8547,  11624 => 8541,  11614 => 8534,  11604 => 8527,  11593 => 8519,  11583 => 8512,  11573 => 8505,  11563 => 8498,  11553 => 8491,  11543 => 8484,  11533 => 8477,  11523 => 8470,  11513 => 8463,  11503 => 8456,  11493 => 8449,  11484 => 8443,  11474 => 8436,  11465 => 8430,  11455 => 8423,  11445 => 8416,  11435 => 8409,  11425 => 8402,  11415 => 8395,  11405 => 8388,  11395 => 8381,  11385 => 8374,  11376 => 8368,  11366 => 8361,  11356 => 8354,  11346 => 8347,  11337 => 8341,  11328 => 8335,  11318 => 8328,  11308 => 8321,  11298 => 8314,  11288 => 8307,  11277 => 8299,  11266 => 8291,  11255 => 8283,  11245 => 8276,  11235 => 8269,  11225 => 8262,  11216 => 8256,  11206 => 8249,  11196 => 8242,  11186 => 8235,  11176 => 8228,  11166 => 8221,  11156 => 8214,  11146 => 8207,  11136 => 8200,  11126 => 8193,  11116 => 8186,  11106 => 8179,  11096 => 8172,  11086 => 8165,  11076 => 8158,  11066 => 8151,  11056 => 8144,  11046 => 8137,  11036 => 8130,  11026 => 8123,  11016 => 8116,  11006 => 8109,  10996 => 8102,  10986 => 8095,  10976 => 8088,  10966 => 8081,  10956 => 8074,  10947 => 8068,  10937 => 8061,  10927 => 8054,  10918 => 8048,  10908 => 8041,  10899 => 8035,  10889 => 8028,  10880 => 8022,  10870 => 8015,  10860 => 8008,  10850 => 8001,  10840 => 7994,  10830 => 7987,  10820 => 7980,  10810 => 7973,  10800 => 7966,  10790 => 7959,  10780 => 7952,  10771 => 7946,  10761 => 7939,  10751 => 7932,  10741 => 7925,  10731 => 7918,  10721 => 7911,  10711 => 7904,  10701 => 7897,  10691 => 7890,  10682 => 7884,  10673 => 7878,  10663 => 7871,  10653 => 7864,  10643 => 7857,  10633 => 7850,  10623 => 7843,  10613 => 7836,  10604 => 7830,  10594 => 7823,  10584 => 7816,  10574 => 7809,  10564 => 7802,  10554 => 7795,  10544 => 7788,  10534 => 7781,  10524 => 7774,  10515 => 7768,  10506 => 7762,  10496 => 7755,  10487 => 7749,  10478 => 7743,  10468 => 7736,  10459 => 7730,  10449 => 7723,  10439 => 7716,  10429 => 7709,  10419 => 7702,  10409 => 7695,  10399 => 7688,  10390 => 7682,  10381 => 7676,  10371 => 7669,  10361 => 7662,  10351 => 7655,  10341 => 7648,  10331 => 7641,  10321 => 7634,  10311 => 7627,  10301 => 7620,  10292 => 7614,  10283 => 7608,  10273 => 7601,  10264 => 7595,  10255 => 7589,  10245 => 7582,  10235 => 7575,  10226 => 7569,  10217 => 7563,  10207 => 7556,  10197 => 7549,  10187 => 7542,  10177 => 7535,  10167 => 7528,  10157 => 7521,  10148 => 7515,  10138 => 7508,  10128 => 7501,  10119 => 7495,  10109 => 7488,  10099 => 7481,  10089 => 7474,  10079 => 7467,  10069 => 7460,  10059 => 7453,  10049 => 7446,  10039 => 7439,  10029 => 7432,  10019 => 7425,  10009 => 7418,  9999 => 7411,  9989 => 7404,  9979 => 7397,  9970 => 7391,  9960 => 7384,  9951 => 7378,  9941 => 7371,  9932 => 7365,  9922 => 7358,  9912 => 7351,  9902 => 7344,  9892 => 7337,  9882 => 7330,  9873 => 7324,  9864 => 7318,  9855 => 7312,  9846 => 7306,  9837 => 7300,  9827 => 7293,  9818 => 7287,  9809 => 7281,  9800 => 7275,  9790 => 7268,  9781 => 7262,  9772 => 7256,  9763 => 7250,  9754 => 7244,  9744 => 7237,  9735 => 7231,  9725 => 7224,  9716 => 7218,  9706 => 7211,  9697 => 7205,  9688 => 7199,  9679 => 7193,  9670 => 7187,  9660 => 7180,  9650 => 7173,  9641 => 7167,  9632 => 7161,  9623 => 7155,  9614 => 7149,  9605 => 7143,  9596 => 7137,  9587 => 7131,  9577 => 7124,  9567 => 7117,  9557 => 7110,  9548 => 7104,  9538 => 7097,  9528 => 7090,  9518 => 7083,  9509 => 7077,  9500 => 7071,  9491 => 7065,  9481 => 7058,  9472 => 7052,  9463 => 7046,  9454 => 7040,  9445 => 7034,  9435 => 7027,  9425 => 7020,  9415 => 7013,  9405 => 7006,  9396 => 7000,  9386 => 6993,  9376 => 6986,  9366 => 6979,  9356 => 6972,  9347 => 6966,  9337 => 6959,  9327 => 6952,  9317 => 6945,  9307 => 6938,  9298 => 6932,  9289 => 6926,  9280 => 6920,  9271 => 6914,  9262 => 6908,  9253 => 6902,  9244 => 6896,  9234 => 6889,  9224 => 6882,  9215 => 6876,  9205 => 6869,  9195 => 6862,  9186 => 6856,  9176 => 6849,  9166 => 6842,  9156 => 6835,  9146 => 6828,  9136 => 6821,  9126 => 6814,  9116 => 6807,  9107 => 6801,  9097 => 6794,  9087 => 6787,  9078 => 6781,  9068 => 6774,  9059 => 6768,  9049 => 6761,  9040 => 6755,  9031 => 6749,  9021 => 6742,  9012 => 6736,  9002 => 6729,  8993 => 6723,  8984 => 6717,  8974 => 6710,  8964 => 6703,  8954 => 6696,  8944 => 6689,  8935 => 6683,  8926 => 6677,  8917 => 6671,  8907 => 6664,  8898 => 6658,  8888 => 6651,  8879 => 6645,  8869 => 6638,  8860 => 6632,  8850 => 6625,  8841 => 6619,  8832 => 6613,  8823 => 6607,  8814 => 6601,  8804 => 6594,  8795 => 6588,  8786 => 6582,  8777 => 6576,  8768 => 6570,  8758 => 6563,  8748 => 6556,  8738 => 6549,  8728 => 6542,  8718 => 6535,  8708 => 6528,  8698 => 6521,  8688 => 6514,  8678 => 6507,  8669 => 6501,  8659 => 6494,  8650 => 6488,  8640 => 6481,  8630 => 6474,  8621 => 6468,  8611 => 6461,  8601 => 6454,  8591 => 6447,  8581 => 6440,  8571 => 6433,  8561 => 6426,  8551 => 6419,  8541 => 6412,  8531 => 6405,  8521 => 6398,  8511 => 6391,  8501 => 6384,  8492 => 6378,  8482 => 6371,  8472 => 6364,  8462 => 6357,  8452 => 6350,  8443 => 6344,  8434 => 6338,  8425 => 6332,  8415 => 6325,  8405 => 6318,  8395 => 6311,  8386 => 6305,  8377 => 6299,  8367 => 6292,  8358 => 6286,  8349 => 6280,  8340 => 6274,  8330 => 6267,  8321 => 6261,  8312 => 6255,  8303 => 6249,  8293 => 6242,  8283 => 6235,  8273 => 6228,  8264 => 6222,  8255 => 6216,  8246 => 6210,  8237 => 6204,  8228 => 6198,  8219 => 6192,  8210 => 6186,  8201 => 6180,  8192 => 6174,  8183 => 6168,  8174 => 6162,  8165 => 6156,  8156 => 6150,  8146 => 6143,  8136 => 6136,  8126 => 6129,  8116 => 6122,  8107 => 6116,  8098 => 6110,  8089 => 6104,  8080 => 6098,  8071 => 6092,  8062 => 6086,  8053 => 6080,  8044 => 6074,  8035 => 6068,  8026 => 6062,  8017 => 6056,  8008 => 6050,  7999 => 6044,  7989 => 6037,  7980 => 6031,  7971 => 6025,  7962 => 6019,  7953 => 6013,  7944 => 6007,  7935 => 6001,  7925 => 5994,  7916 => 5988,  7906 => 5981,  7896 => 5974,  7886 => 5967,  7876 => 5960,  7866 => 5953,  7856 => 5946,  7846 => 5939,  7836 => 5932,  7826 => 5925,  7816 => 5918,  7807 => 5912,  7797 => 5905,  7788 => 5899,  7779 => 5893,  7769 => 5886,  7760 => 5880,  7750 => 5873,  7740 => 5866,  7730 => 5859,  7720 => 5852,  7711 => 5846,  7701 => 5839,  7691 => 5832,  7681 => 5825,  7672 => 5819,  7663 => 5813,  7653 => 5806,  7643 => 5799,  7634 => 5793,  7625 => 5787,  7615 => 5780,  7606 => 5774,  7596 => 5767,  7587 => 5761,  7577 => 5754,  7567 => 5747,  7557 => 5740,  7547 => 5733,  7537 => 5726,  7527 => 5719,  7517 => 5712,  7507 => 5705,  7497 => 5698,  7487 => 5691,  7477 => 5684,  7467 => 5677,  7457 => 5670,  7447 => 5663,  7437 => 5656,  7427 => 5649,  7417 => 5642,  7407 => 5635,  7397 => 5628,  7387 => 5621,  7378 => 5615,  7368 => 5608,  7359 => 5602,  7349 => 5595,  7339 => 5588,  7329 => 5581,  7319 => 5574,  7309 => 5567,  7300 => 5561,  7291 => 5555,  7281 => 5548,  7272 => 5542,  7263 => 5536,  7253 => 5529,  7244 => 5523,  7234 => 5516,  7225 => 5510,  7215 => 5503,  7205 => 5496,  7195 => 5489,  7185 => 5482,  7175 => 5475,  7166 => 5469,  7156 => 5462,  7146 => 5455,  7136 => 5448,  7126 => 5441,  7117 => 5435,  7107 => 5428,  7098 => 5422,  7089 => 5416,  7080 => 5410,  7071 => 5404,  7061 => 5397,  7052 => 5391,  7042 => 5384,  7032 => 5377,  7023 => 5371,  7014 => 5365,  7004 => 5358,  6995 => 5352,  6985 => 5345,  6976 => 5339,  6967 => 5333,  6957 => 5326,  6947 => 5319,  6938 => 5313,  6928 => 5306,  6918 => 5299,  6909 => 5293,  6900 => 5287,  6890 => 5280,  6880 => 5273,  6870 => 5266,  6861 => 5260,  6852 => 5254,  6842 => 5247,  6833 => 5241,  6823 => 5234,  6814 => 5228,  6805 => 5222,  6796 => 5216,  6787 => 5210,  6777 => 5203,  6767 => 5196,  6757 => 5189,  6747 => 5182,  6737 => 5175,  6727 => 5168,  6718 => 5162,  6709 => 5156,  6699 => 5149,  6689 => 5142,  6680 => 5136,  6670 => 5129,  6660 => 5122,  6650 => 5115,  6640 => 5108,  6630 => 5101,  6620 => 5094,  6610 => 5087,  6601 => 5081,  6592 => 5075,  6583 => 5069,  6574 => 5063,  6565 => 5057,  6556 => 5051,  6547 => 5045,  6538 => 5039,  6529 => 5033,  6519 => 5026,  6510 => 5020,  6500 => 5013,  6491 => 5007,  6482 => 5001,  6473 => 4995,  6464 => 4989,  6455 => 4983,  6446 => 4977,  6437 => 4971,  6427 => 4964,  6418 => 4958,  6408 => 4951,  6399 => 4945,  6389 => 4938,  6379 => 4931,  6371 => 4926,  6362 => 4920,  6353 => 4914,  6344 => 4908,  6334 => 4901,  6325 => 4895,  6315 => 4888,  6306 => 4882,  6296 => 4875,  6287 => 4869,  6278 => 4863,  6269 => 4857,  6259 => 4850,  6250 => 4844,  6241 => 4838,  6232 => 4832,  6222 => 4825,  6212 => 4818,  6202 => 4811,  6193 => 4805,  6184 => 4799,  6174 => 4792,  6164 => 4785,  6156 => 4780,  6147 => 4774,  6137 => 4767,  6128 => 4761,  6119 => 4755,  6109 => 4748,  6099 => 4741,  6090 => 4735,  6080 => 4728,  6070 => 4721,  6060 => 4714,  6051 => 4708,  6041 => 4701,  6031 => 4694,  6022 => 4688,  6012 => 4681,  6003 => 4675,  5994 => 4669,  5984 => 4662,  5974 => 4655,  5962 => 4646,  5953 => 4640,  5943 => 4633,  5933 => 4626,  5923 => 4619,  5913 => 4612,  5903 => 4605,  5893 => 4598,  5883 => 4591,  5873 => 4584,  5863 => 4577,  5853 => 4570,  5844 => 4564,  5834 => 4557,  5824 => 4550,  5814 => 4543,  5805 => 4537,  5796 => 4531,  5787 => 4525,  5777 => 4518,  5768 => 4512,  5759 => 4506,  5749 => 4499,  5740 => 4493,  5731 => 4487,  5722 => 4481,  5713 => 4475,  5703 => 4468,  5694 => 4462,  5685 => 4456,  5675 => 4449,  5665 => 4442,  5656 => 4436,  5646 => 4429,  5637 => 4423,  5628 => 4417,  5619 => 4411,  5610 => 4405,  5601 => 4399,  5592 => 4393,  5582 => 4386,  5572 => 4379,  5562 => 4372,  5552 => 4365,  5542 => 4358,  5532 => 4351,  5523 => 4345,  5514 => 4339,  5504 => 4332,  5494 => 4325,  5484 => 4318,  5474 => 4311,  5465 => 4305,  5455 => 4298,  5445 => 4291,  5435 => 4284,  5426 => 4278,  5416 => 4271,  5406 => 4264,  5396 => 4257,  5387 => 4251,  5377 => 4244,  5367 => 4237,  5358 => 4231,  5349 => 4225,  5339 => 4218,  5329 => 4211,  5319 => 4204,  5310 => 4198,  5301 => 4192,  5291 => 4185,  5281 => 4178,  5271 => 4171,  5261 => 4164,  5252 => 4158,  5243 => 4152,  5234 => 4146,  5224 => 4139,  5214 => 4132,  5205 => 4126,  5196 => 4120,  5186 => 4113,  5176 => 4106,  5166 => 4099,  5156 => 4092,  5146 => 4085,  5136 => 4078,  5127 => 4072,  5117 => 4065,  5107 => 4058,  5097 => 4051,  5087 => 4044,  5077 => 4037,  5068 => 4031,  5060 => 4026,  5050 => 4019,  5040 => 4012,  5031 => 4006,  5022 => 4000,  5013 => 3994,  5003 => 3987,  4993 => 3980,  4983 => 3973,  4973 => 3966,  4963 => 3959,  4953 => 3952,  4943 => 3945,  4934 => 3939,  4925 => 3933,  4916 => 3927,  4906 => 3920,  4896 => 3913,  4886 => 3906,  4877 => 3900,  4867 => 3893,  4857 => 3886,  4847 => 3879,  4837 => 3872,  4827 => 3865,  4817 => 3858,  4807 => 3851,  4797 => 3844,  4788 => 3838,  4778 => 3831,  4769 => 3825,  4759 => 3818,  4749 => 3811,  4740 => 3805,  4730 => 3798,  4720 => 3791,  4710 => 3784,  4701 => 3778,  4691 => 3771,  4682 => 3765,  4672 => 3758,  4662 => 3751,  4652 => 3744,  4644 => 3739,  4634 => 3732,  4625 => 3726,  4617 => 3721,  4607 => 3714,  4597 => 3707,  4588 => 3701,  4578 => 3694,  4568 => 3687,  4558 => 3680,  4548 => 3673,  4538 => 3666,  4529 => 3660,  4520 => 3654,  4511 => 3648,  4502 => 3642,  4493 => 3636,  4483 => 3629,  4473 => 3622,  4463 => 3615,  4453 => 3608,  4443 => 3601,  4433 => 3594,  4423 => 3587,  4413 => 3580,  4403 => 3573,  4393 => 3566,  4383 => 3559,  4373 => 3552,  4363 => 3545,  4353 => 3538,  4343 => 3531,  4333 => 3524,  4323 => 3517,  4314 => 3511,  4305 => 3505,  4296 => 3499,  4286 => 3492,  4276 => 3485,  4267 => 3479,  4257 => 3472,  4249 => 3467,  4227 => 3448,  4217 => 3441,  4208 => 3435,  4198 => 3428,  4188 => 3421,  4178 => 3414,  4168 => 3407,  4158 => 3400,  4148 => 3393,  4138 => 3386,  4128 => 3379,  4118 => 3372,  4108 => 3365,  4098 => 3358,  4087 => 3350,  4077 => 3343,  4067 => 3336,  4057 => 3329,  4047 => 3322,  4038 => 3316,  4028 => 3309,  4018 => 3302,  4008 => 3295,  3998 => 3288,  3988 => 3281,  3978 => 3274,  3968 => 3267,  3958 => 3260,  3948 => 3253,  3938 => 3246,  3928 => 3239,  3918 => 3232,  3908 => 3225,  3898 => 3218,  3888 => 3211,  3878 => 3204,  3868 => 3197,  3858 => 3190,  3848 => 3183,  3838 => 3176,  3828 => 3169,  3818 => 3162,  3808 => 3155,  3798 => 3148,  3788 => 3141,  3778 => 3134,  3768 => 3127,  3757 => 3119,  3747 => 3112,  3738 => 3106,  3728 => 3099,  3718 => 3092,  3708 => 3085,  3698 => 3078,  3688 => 3071,  3678 => 3064,  3668 => 3057,  3659 => 3051,  3650 => 3045,  3640 => 3038,  3631 => 3032,  3621 => 3025,  3611 => 3018,  3602 => 3012,  3592 => 3005,  3582 => 2998,  3572 => 2991,  3562 => 2984,  3552 => 2977,  3542 => 2970,  3532 => 2963,  3522 => 2956,  3512 => 2949,  3502 => 2942,  3492 => 2935,  3482 => 2928,  3472 => 2921,  3462 => 2914,  3452 => 2907,  3442 => 2900,  3432 => 2893,  3422 => 2886,  3412 => 2879,  3402 => 2872,  3392 => 2865,  3382 => 2858,  3372 => 2851,  3362 => 2844,  3352 => 2837,  3342 => 2830,  3332 => 2823,  3322 => 2816,  3312 => 2809,  3302 => 2802,  3280 => 2783,  3270 => 2776,  3260 => 2769,  3250 => 2762,  3240 => 2755,  3230 => 2748,  3220 => 2741,  3210 => 2734,  3200 => 2727,  3190 => 2720,  3180 => 2713,  3170 => 2706,  3160 => 2699,  3150 => 2692,  3140 => 2685,  3130 => 2678,  3120 => 2671,  3110 => 2664,  3100 => 2657,  3090 => 2650,  3080 => 2643,  3070 => 2636,  3060 => 2629,  3049 => 2621,  3039 => 2614,  3028 => 2606,  3005 => 2586,  2995 => 2579,  2985 => 2572,  2975 => 2565,  2965 => 2558,  2955 => 2551,  2945 => 2544,  2935 => 2537,  2925 => 2530,  2915 => 2523,  2905 => 2516,  2895 => 2509,  2885 => 2502,  2875 => 2495,  2865 => 2488,  2855 => 2481,  2846 => 2475,  2836 => 2468,  2826 => 2461,  2816 => 2454,  2806 => 2447,  2796 => 2440,  2786 => 2433,  2776 => 2426,  2767 => 2420,  2758 => 2414,  2749 => 2408,  2740 => 2402,  2730 => 2395,  2721 => 2389,  2712 => 2383,  2702 => 2376,  2679 => 2356,  2669 => 2349,  2659 => 2342,  2649 => 2335,  2639 => 2328,  2629 => 2321,  2619 => 2314,  2609 => 2307,  2599 => 2300,  2589 => 2293,  2579 => 2286,  2569 => 2279,  2559 => 2272,  2549 => 2265,  2539 => 2258,  2529 => 2251,  2519 => 2244,  2509 => 2237,  2499 => 2230,  2489 => 2223,  2479 => 2216,  2469 => 2209,  2459 => 2202,  2449 => 2195,  2439 => 2188,  2429 => 2181,  2419 => 2174,  2409 => 2167,  2399 => 2160,  2389 => 2153,  2379 => 2146,  2369 => 2139,  2359 => 2132,  2349 => 2125,  2339 => 2118,  2329 => 2111,  2319 => 2104,  2309 => 2097,  2299 => 2090,  2289 => 2083,  2279 => 2076,  2269 => 2069,  2259 => 2062,  2249 => 2055,  2239 => 2048,  2229 => 2041,  2219 => 2034,  2209 => 2027,  2199 => 2020,  2189 => 2013,  2179 => 2006,  2169 => 1999,  2159 => 1992,  2149 => 1985,  2139 => 1978,  2129 => 1971,  2119 => 1964,  2109 => 1957,  2099 => 1950,  2089 => 1943,  2079 => 1936,  2069 => 1929,  2059 => 1922,  2049 => 1915,  2039 => 1908,  2029 => 1901,  2019 => 1894,  2009 => 1887,  1999 => 1880,  1989 => 1873,  1979 => 1866,  1969 => 1859,  1959 => 1852,  1949 => 1845,  1939 => 1838,  1929 => 1831,  1919 => 1824,  1909 => 1817,  1899 => 1810,  1889 => 1803,  1879 => 1796,  1869 => 1789,  1859 => 1782,  1849 => 1775,  1839 => 1768,  1829 => 1761,  1819 => 1754,  1809 => 1747,  1799 => 1740,  1789 => 1733,  64 => 10,  60 => 9,  54 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hooks/hooks.html.twig", "hooks/hooks.html.twig");
    }
}
