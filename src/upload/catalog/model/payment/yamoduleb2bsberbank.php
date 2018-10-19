<?php

class ModelPaymentYamoduleB2bSberbank extends Model
{
    public function getMethod()
    {
        $method_data = array();

        if ($this->config->get('ya_b2b_sberbank_on')) {
            $for23 = (version_compare(VERSION, "2.3.0", '>=')) ? "extension/" : "";
            $this->load->language($for23.'payment/yamodule');
            $method_data = array(
                'code'       => 'yamoduleb2bsberbank',
                'title'      => $this->language->get('text_method_2s'),
                'sort_order' => $this->config->get('yamodule_total_sort_order'),
                'terms'      => '',
            );
        }

        return $method_data;
    }
}

class ModelExtensionPaymentYamoduleB2bSberbank extends ModelPaymentYamoduleB2bSberbank
{
}