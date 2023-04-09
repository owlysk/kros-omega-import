<?php
class KrosExportInvoice{
    public function __init(){}

    public function generate($data=array()){
        
        $file_header= array(
            "R00",
            "T01",
        );
        $invoice_header = array(
            "R01",
            ($data["number"]!="")?$data["number"]:'',
            ($data["name"]!="")?$data["name"]:'',
            ($data["ico"]!="")?$data["ico"]:'',
            ($data["date_issue"]!="")?date('d.m.R',strtotime($data["date_issue"])):date('d.m.Y'),
            ($data["date_due"]!="")?date('d.m.R',strtotime($data["date_due"])):date('d.m.Y'),
            ($data["duzp"]!="")?date('d.m.R',strtotime($data["duzp"])):date('d.m.Y'),
            ($data["base_low"]!="")?$data["base_low"]:'0',
            ($data["base_high"]!="")?$data["base_high"]:'0',
            ($data["base_0"]!="")?$data["base_0"]:'0',
            ($data["base_free"]!="")?$data["base_free"]:'0',
            ($data["rate_low"]!="")?$data["rate_low"]:'10',
            ($data["rate_high"]!="")?$data["rate_high"]:'20',
            ($data["amount_vat_low"]!="")?$data["amount_vat_low"]:'0',
            ($data["amount_vat_high"]!="")?$data["amount_vat_high"]:'0',
            ($data["price_correction"]!="")?$data["price_correction"]:'0',
            ($data["amount_total"]!="")?$data["amount_total"]:'0',
            ($data["type"]!="")?$data["type"]:'0',
            ($data["evidence_code"]!="")?$data["evidence_code"]:'',
            
            ($data["number_code"]!="")?$data["number_code"]:'',
            ($data["customer_internal_code"]!="")?$data["customer_internal_code"]:'',
            ($data["customer_code"]!="")?$data["customer_code"]:'',
            ($data["customer_centre"]!="")?$data["customer_centre"]:'',
            ($data["customer_plent"]!="")?$data["customer_plent"]:'',
            ($data["street"]!="")?$data["street"]:'',
            ($data["zip"]!="")?$data["zip"]:'',
            ($data["city"]!="")?$data["city"]:'',
            ($data["dic"]!="")?$data["dic"]:'',
            ($data["time_issue"]!="")?$data["time_issue"]:'',
            ($data["term_delivery"]!="")?$data["term_delivery"]:'',
            ($data["intro"]!="")?$data["intro"]:'',
            ($data["ending"]!="")?$data["ending"]:'',
            ($data["delivery_bill"]!="")?$data["delivery_bill"]:'',
            ($data["order_number"]!="")?$data["order_number"]:'',
            ($data["signed"]!="")?$data["signed"]:'',
            ($data["cs"]!="")?$data["cs"]:'',
            ($data["ss"]!="")?$data["ss"]:'',
            ($data["payment_type"]!="")?$data["payment_type"]:'',
            ($data["shipment_type"]!="")?$data["shipment_type"]:'',
            ($data["currency"]!="")?$data["currency"]:'',
            ($data["currency_amount"]!="")?$data["currency_amount"]:'1',
            ($data["currency_course"]!="")?$data["currency_course"]:'',
            ($data["amount_total_hc"]!="")?$data["amount_total_hc"]:(($data["currency_course"]=="")?$data["amount_total"]:''),
            ($data["custom_bill"]!="")?$data["custom_bill"]:'',
            ($data["note"]!="")?$data["note"]:'',
            ($data["invoice_subject"]!="")?$data["invoice_subject"]:'',
            ($data["country"]!="")?$data["country"]:'',
            ($data["ic_dph_code"]!="")?$data["ic_dph_code"]:'',
            ($data["ic_dph"]!="")?$data["ic_dph"]:'',

            ($data["account_number"]!="")?$data["account_number"]:'',
            ($data["bank_name"]!="")?$data["bank_name"]:'',
            ($data["bank_branch"]!="")?$data["bank_branch"]:'',
            ($data["country"]!="")?$data["country"]:'',
            ($data["signed_code"]!="")?$data["signed_code"]:'',
            ($data["name_short"]!="")?$data["name_short"]:'',
            ($data["swift"]!="")?$data["swift"]:'',
            ($data["iban"]!="")?$data["iban"]:'',
            ($data["supplier_country_code"]!="")?$data["supplier_country_code"]:'',
            ($data["supplier_ic_dph"]!="")?$data["supplier_ic_dph"]:'',
            ($data["supplier_country"]!="")?$data["supplier_country"]:'',
            ($data["round"]!="")?$data["round"]:'',
            ($data["round_mode"]!="")?$data["round_mode"]:'',
            ($data["ico_order_number"]!="")?$data["ico_order_number"]:'',
            ($data["round_item"]!="")?$data["round_item"]:'',
            ($data["advance_text"]!="")?$data["advance_text"]:'',
            ($data["advance_amount"]!="")?$data["advance_amount"]:'',
            ($data["vat_calc_method"]!="")?$data["vat_calc_method"]:'',
            ($data["vat_calc_method_old"]!="")?$data["vat_calc_method_old"]:'',
            ($data["date_issue_df"]!="")?$data["date_issue_df"]:'',
            ($data["paid_ecr"]!="")?$data["paid_ecr"]:'',
            ($data["vs"]!="")?$data["vs"]:'',
            ($data["post_contact_person"]!="")?$data["post_contact_person"]:'',
            ($data["post_name"]!="")?$data["post_name"]:'',
            ($data["post_centre"]!="")?$data["post_centre"]:'',
            ($data["post_plent"]!="")?$data["post_plent"]:'',
            ($data["post_street"]!="")?$data["post_street"]:'',
            ($data["post_zip"]!="")?$data["post_zip"]:'',
            ($data["post_city"]!="")?$data["post_city"]:'',
            '', //do not use
            ($data["discount_type"]!="")?$data["discount_type"]:'',
            ($data["discount_invoice"]!="")?$data["discount_invoice"]:'',
            ($data["reserve"]!="")?$data["reserve"]:'',
            ($data["contact_person"]!="")?$data["contact_person"]:'',
            ($data["phone"]!="")?$data["phone"]:'',
            ($data["apply_vat_payed"]!="")?$data["apply_vat_payed"]:'',
            ($data["invoice_old_macrocards"]!="")?$data["invoice_old_macrocards"]:'',
            ($data["customer_iban"]!="")?$data["customer_iban"]:'',
            ($data["customer_account_number"]!="")?$data["customer_account_number"]:'',
            ($data["is_oss"]!="")?$data["is_oss"]:'',
            ($data["oss_country"]!="")?$data["oss_country"]:'',
            ($data["oss_direction"]!="")?$data["oss_direction"]:'',
            ($data["oss_country_code"]!="")?$data["oss_country_code"]:'',
            ($data["quart_oss"]!="")?$data["quart_oss"]:'',
            ($data["year_oss"]!="")?$data["year_oss"]:'',
            
        );
        
        $invoice_items = array();
        if(sizeof($data["items"])>0)
        {
            foreach($data["items"] as $dataItem)
            {
                $item = array(
                    ("R02"),
                    ($dataItem["name"]!="")?$dataItem["name"]:'',
                    ($dataItem["quantity"]!="")?$dataItem["quantity"]:'',
                    ($dataItem["unit"]!="")?$dataItem["unit"]:'',
                    ($dataItem["price"]!="")?$dataItem["price"]:'',
                    ($dataItem["vat_rate"]!="")?$dataItem["vat_rate"]:'',

                    ($dataItem["price_type_code"]!="")?$dataItem["price_type_code"]:'',
                    ($dataItem["payed_number"]!="")?$dataItem["payed_number"]:'',
                    ($dataItem["payed_countdown_number"]!="")?$dataItem["payed_countdown_number"]:'',
                    ($dataItem["centre_code"]!="")?$dataItem["centre_code"]:'',
                    ($dataItem["centre_name"]!="")?$dataItem["centre_name"]:'',
                    ($dataItem["order_code"]!="")?$dataItem["order_code"]:'',
                    ($dataItem["order_name"]!="")?$dataItem["order_name"]:'',
                    ($dataItem["operation_code"]!="")?$dataItem["operation_code"]:'',
                    ($dataItem["operation_name"]!="")?$dataItem["operation_name"]:'',
                    ($dataItem["worker_code"]!="")?$dataItem["worker_code"]:'',
                    ($dataItem["worker_name"]!="")?$dataItem["worker_name"]:'',
                    ($dataItem["worker_surname"]!="")?$dataItem["worker_surname"]:'',
                    ($dataItem["centre_number"]!="")?$dataItem["centre_number"]:'',
                    ($dataItem["order_number"]!="")?$dataItem["order_number"]:'',
                    ($dataItem["operation_number"]!="")?$dataItem["operation_number"]:'',
                    ($dataItem["worker_number"]!="")?$dataItem["worker_number"]:'',
                    ($dataItem["part_vat_report"]!="")?$dataItem["part_vat_report"]:'',
                    ($dataItem["type_vat_report"]!="")?$dataItem["type_vat_report"]:'',
                    ($dataItem["code_vat_report"]!="")?$dataItem["code_vat_report"]:'',
                    ($dataItem["unit_vat_report"]!="")?$dataItem["unit_vat_report"]:'',
                    ($dataItem["quantity_vat_report"]!="")?$dataItem["quantity_vat_report"]:'',
                    ($dataItem["centre_id"]!="")?$dataItem["centre_id"]:'',
                    ($dataItem["order_id"]!="")?$dataItem["order_id"]:'',
                    ($dataItem["operation_id"]!="")?$dataItem["operation_id"]:'',
                    ($dataItem["worker_id"]!="")?$dataItem["worker_id"]:'',
                    ($dataItem["payed_negative"]!="")?$dataItem["payed_negative"]:'',
                    ($dataItem["payed_id"]!="")?$dataItem["payed_id"]:'',
                    ($dataItem["countdown_id"]!="")?$dataItem["countdown_id"]:'',
                    
                );

                $invoice_items[]=$item;
            }
        }
        
        $glue="\t";
        $file_content="";
        $file_content.= implode($glue,$file_header)."\n";
        $file_content.= implode($glue,$invoice_header)."\n";
        if(sizeof($invoice_items)>0)
        {
            foreach($invoice_items as $invoice_item)
            {
                $file_content.= implode($glue,$invoice_item)."\n";
            }
        }

        $file_content = str_replace("\n","\r\n",$file_content);
        $file_content = iconv("UTF-8", "Windows-1250//IGNORE", $file_content);

        return $file_content;
    }

}

?>
