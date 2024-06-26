<?php

return [
    'label'   => [
        'name'                        => 'নাম',
        'email'                       => 'ইমেইল',
        'phone'                       => 'ফোন',
        'product_name'                => 'পণ্যের নাম',
        'product_category_id'         => 'বিভাগ',
        'product_brand_id'            => 'ব্র্যান্ড',
        'barcode_id'                  => 'বারকোড',
        'unit_id'                     => 'একক',
        'tax_id'                      => 'কর',
        'tax'                         => 'কর',
        'buying_price'                => 'ক্রয় মূল্য',
        'selling_price'               => 'বিক্রয় মূল্য',
        'can_purchasable'             => 'ক্রয় করা যাবে',
        'purchasable'                 => 'ক্রয়যোগ্য',
        'show_stock_out'              => 'স্টক শেষ',
        'maximum_purchase_quantity'   => 'সর্বাধিক ক্রয় পরিমাণ',
        'low_stock_quantity_warning'  => 'কম স্টক পরিমাণ সতর্কতা',
        'weight'                      => 'ওজন',
        'refundable'                  => 'ফেরত প্রাপ্ত',
        'code'                        => 'কোড',
        'sku'                         => 'SKU',
        'discount'                    => 'ছাড়',
        'discount_type'               => 'ছাড়ের ধরণ',
        'start_date'                  => 'শুরুর তারিখ',
        'end_date'                    => 'শেষ তারিখ',
        'amount'                      => 'পরিমাণ',
        'status'                      => 'অবস্থা',
        'price'                       => 'মূল্য',
        'role'                        => 'ভূমিকা',
        'order_serial_no'             => 'অর্ডার সিরিয়াল নং',
        'date'                        => 'তারিখ',
        'total'                       => 'মোট',
        'shipping_charge'             => 'শিপিং চার্জ',
        'payment_type'                => 'পরিশোধের ধরণ',
        'payment_status'              => 'পরিশোধের অবস্থা',
        'quantity'                    => 'পরিমাণ',
        'sold_quantity'               => 'বিক্রি করা পরিমাণ',
        'order_type'                  => 'অর্ডারের ধরণ',
        'customer'                    => 'গ্রাহক',
        'confirm'                     => 'নিশ্চিত করুন',
        'congratulations'             => 'অভিনন্দন!',
        'transaction_id'              => 'লেনদেন আইডি',
        'back_to_home'                => 'হোমে ফিরুন',
        'back_to_payment'             => 'পরিশোধে ফিরুন',
        'payment_method'              => 'পরিশোধের পদ্ধতি',
        'now'                         => 'এখন',
        'balance'                     => 'ব্যালেন্স',
        'advance'                     => 'অগ্রীম',
        'all_roles'                   => 'সমস্ত ভূমিকা',
        'all_users'                   => 'সমস্ত ব্যবহারকারী',
        'user'                        => 'ব্যবহারকারী',
        'title'                       => 'শিরোনাম',
        'all_items'                   => 'সমস্ত আইটেম',
        'slug'                        => 'স্লাগ',
        'type'                        => 'ধরণ',
        'supplier'                    => 'সরবরাহকারী',
        'reference_no'                => 'রেফারেন্স নং',
        'note'                        => 'মন্তব্য',
        'stock'                       => 'স্টক',
        'reason'                      => 'কারণ',
        'total_return_price'          => 'মোট রিটার্ন মূল্য',
        'source'                      => 'উৎস'
    ],
    'message' => [
        'validation_error'                 => 'মান যাচাই ত্রুটি।',
        'credentials_error'                => 'শংসাপত্র ত্রুটি।',
        'credentials_invalid'              => 'অবৈধ শংসাপত্র বা আপনি অবরোধ করা হয়েছে',
        'role_error'                       => 'ভূমিকা ত্রুটি।',
        'role_exist'                       => 'ভূমিকা বিদ্যমান নেই।',
        'login_success'                    => 'লগইন সফল।',
        'logout_success'                   => 'সফলভাবে লগ আউট হয়েছে।',
        'invalid_api_key'                  => 'অবৈধ API কী।',
        'user_match'                       => 'ব্যবহারকারী মিলছে না।',
        'something_wrong'                  => 'কিছু ভুল হয়েছে।',
        'permission_denied'                => 'অনুমতি প্রত্যাখ্যান।',
        'product_match'                    => 'পণ্য মেলে না।',
        'offer_product_exist'              => 'পণ্যটি ইতিমধ্যে অন্য অফারে যোগ করা হয়েছে। অফার শেষ হওয়ার পরে আপনি এই আইটেমটি আবার যোগ করতে পারবেন।',
        'minimum_order_amount'             => 'সর্বনিম্ন অর্ডার পরিমাণ ',
        'coupon_date_expired'              => 'কুপনের সময় শেষ হয়ে গেছে',
        'coupon_not_exist'                 => 'কুপনটি বিদ্যমান নেই',
        'code_is_invalid'                  => 'কোডটি অবৈধ।',
        'code_is_expired'                  => 'কোডটি মেয়াদ উত্তীর্ণ হয়েছে।',
        'you_can_reset_your_password'      => 'এখন আপনি আপনার পাসওয়ার্ড রিসেট করতে পারেন।',
        'check_your_email_for_code'        => 'দয়া করে কোডের জন্য আপনার ইমেইল চেক করুন।',
        'check_your_phone_for_code'        => 'দয়া করে কোডের জন্য আপনার ফোন চেক করুন।',
        'token_created_fail'               => 'টোকেন তৈরি করা ব্যর্থ হয়েছে।',
        'email_does_not_exist'             => 'এই ইমেল বিদ্যমান নেই।',
        'phone_does_not_exist'             => 'এই ফোন বিদ্যমান নেই।',
        'user_does_not_exist'              => 'এই ব্যবহারকারী বিদ্যমান নেই।',
        'phone_exist'                      => 'এই ফোন ইতিমধ্যে বিদ্যমান।',
        'otp_verify_success'               => 'OTP যাচাই সফল হয়েছে।',
        'user_verify_success'              => 'ব্যবহারকারী যাচাই সফল।',
        'register_successfully'            => 'সফলভাবে নিবন্ধন করা হয়েছে।',
        'reset_successfully'               => 'আপনার পাসওয়ার্ড সফলভাবে রিসেট হয়েছে।',
        'select_your_payment_method'       => 'আপনার পরিশোধের পদ্ধতি নির্বাচন করুন',
        'payment_successful'               => 'আপনার পেমেন্ট সফলভাবে প্রস্তুত হয়েছে',
        'payment_canceled'                 => 'পেমেন্ট বাতিল হয়েছে',
        'payment_gateway_disable'          => 'পেমেন্ট গেটওয়ে নিষ্ক্রিয়',
        'token_save'                       => 'টোকেন সফলভাবে সংরক্ষিত হয়েছে।',
        'token_is_invalid'                 => 'টোকেন অবৈধ।',
        'order_accept'                     => 'অর্ডার ইতিমধ্যে গ্রহণ করা হয়েছে।',
        'order_confirmed'                  => 'অর্ডার ইতিমধ্যে নিশ্চিত হয়েছে।',
        'feature_disable'                  => 'এই বৈশিষ্ট্য ডেমোর জন্য অক্ষম।',
        'time_slot_exist'                  => 'সময় স্লট ইতিমধ্যে বিদ্যমান।',
        'attribute_invalid'                => 'এই গুণমান অবৈধ। গুণমান বা গুণমান বিকল্প তৈরি করুন।',
        'price_invalid'                    => 'এই মূল্য পরিমাণ অবৈধ।',
        'product_attribute_invalid'        => 'এই পণ্য গুণমান আইডি অবৈধ।',
        'product_attribute_option_invalid' => 'এই পণ্য গুণমান বিকল্প আইডি অবৈধ।',
        'sku_exist'                        => 'SKU ইতিমধ্যে নেওয়া হয়েছে।',
        'resource_already_used'            => 'এই সম্পদ স্থায়ীভাবে সরানো যাবে না। এটি অন্য সম্পদের সাথে সম্পর্কিত।',
        'variation_sku_required'           => 'SKU ক্ষেত্রটি প্রয়োজন।',
        'email_or_phone_required'          => 'ইমেল বা ফোন ক্ষেত্রটি প্রয়োজন।',
        'country_exist'                    => 'দেশটি ইতিমধ্যে নেওয়া হয়েছে।',
        'product_tax_invalid'              => 'সমস্ত পণ্যের জন্য কর ক্ষেত্রটি প্রয়োজন।',
        'product_quantity_invalid'         => 'সমস্ত পণ্যের জন্য পরিমাণ ক্ষেত্রটি প্রয়োজন।',
        'product_invalid'                  => 'পণ্য ক্ষেত্রটি প্রয়োজন।',
        'product_price_invalid'            => 'সমস্ত পণ্যের জন্য একক মূল্য ক্ষেত্রটি প্রয়োজন।',
        'product_price_total_invalid'      => 'মোট পণ্যের একক মূল্য অবৈধ।',
        'supplier_invalid'                 => 'সরবরাহকারী অবৈধ।',
        'status_invalid'                   => 'অবৈধ স্থিতি।',
        'return_request_exist'             => 'ফেরতের অনুরোধ ইতিমধ্যে বিদ্যমান।',
        'minimum_one_outlet_required'      => 'সর্বনিম্ন একটি আউটলেট প্রয়োজন',
        "email_send"                       => "ইমেইল সফলভাবে প্রেরণ করা হয়েছে।",
        "price_total_invalid"              => "পরিমাণটি অবৈধ।",
        "the_form_is_valid"                => "ফর্মটি বৈধ",
        'account_delete_success'      => 'অ্যাকাউন্ট সফলভাবে মুছে ফেলা হয়েছে।',
        'account_not_delete'          => 'আপনার একটি সক্রিয় অর্ডার থাকলে আপনি আপনার অ্যাকাউন্ট মুছতে পারবেন না।',
        "only_customer_delete"        => 'শুধুমাত্র গ্রাহকদের অ্যাকাউন্ট মুছে ফেলা যাবে'
    ]
];
