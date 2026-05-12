<?php

/**
 * Dana PHP API Client - Generated Enums
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Dana\MerchantManagement\v1\Enum;

class GoodsSoldType
{
    /**
     * DIGITAL
     */
    const DIGITAL = "DIGITAL";

    /**
     * PHYSICAL
     */
    const PHYSICAL = "PHYSICAL";
}

class UserProfiling
{
    /**
     * B2B
     */
    const B2B = "B2B";

    /**
     * B2C
     */
    const B2C = "B2C";
}

class AssetType
{
    /**
     * CHECKING_ACCOUNT
     */
    const CHECKING_ACCOUNT = "CHECKING_ACCOUNT";

    /**
     * SAVINGS_ACCOUNT
     */
    const SAVINGS_ACCOUNT = "SAVINGS_ACCOUNT";

    /**
     * LOAN_ACCOUNT
     */
    const LOAN_ACCOUNT = "LOAN_ACCOUNT";

    /**
     * IMPS_ACCOUNT
     */
    const IMPS_ACCOUNT = "IMPS_ACCOUNT";

    /**
     * DEBIT_CARD
     */
    const DEBIT_CARD = "DEBIT_CARD";

    /**
     * CREDIT_CARD
     */
    const CREDIT_CARD = "CREDIT_CARD";

    /**
     * SECURED_CREDIT_CARD
     */
    const SECURED_CREDIT_CARD = "SECURED_CREDIT_CARD";

    /**
     * VA_ACCOUNT
     */
    const VA_ACCOUNT = "VA_ACCOUNT";

    /**
     * OTC_ACCOUNT
     */
    const OTC_ACCOUNT = "OTC_ACCOUNT";

    /**
     * REFUND_ACCOUNT
     */
    const REFUND_ACCOUNT = "REFUND_ACCOUNT";

    /**
     * CREDIT_ACCOUNT
     */
    const CREDIT_ACCOUNT = "CREDIT_ACCOUNT";

    /**
     * LOAN
     */
    const LOAN = "LOAN";

    /**
     * MUTUAL_FUNDS_ACCOUNT
     */
    const MUTUAL_FUNDS_ACCOUNT = "MUTUAL_FUNDS_ACCOUNT";

    /**
     * INVESTMENT
     */
    const INVESTMENT = "INVESTMENT";
}

class BusinessEntity
{
    /**
     * pt
     */
    const PT = "pt";

    /**
     * cv
     */
    const CV = "cv";

    /**
     * individu
     */
    const INDIVIDU = "individu";

    /**
     * usaha_dagang
     */
    const USAHA_DAGANG = "usaha_dagang";

    /**
     * yayasan
     */
    const YAYASAN = "yayasan";

    /**
     * koperasi
     */
    const KOPERASI = "koperasi";
}

class ContactBizType
{
    /**
     * TRANSFER_HIS
     */
    const TRANSFER_HIS = "TRANSFER_HIS";

    /**
     * DIRECT_TRANSFER
     */
    const DIRECT_TRANSFER = "DIRECT_TRANSFER";

    /**
     * GENERAL_CARD
     */
    const GENERAL_CARD = "GENERAL_CARD";

    /**
     * DIRECTPAY_CARD
     */
    const DIRECTPAY_CARD = "DIRECTPAY_CARD";

    /**
     * PAYMENT_CARD
     */
    const PAYMENT_CARD = "PAYMENT_CARD";

    /**
     * CASHOUT_CARD
     */
    const CASHOUT_CARD = "CASHOUT_CARD";

    /**
     * IMPS_ACCOUNT
     */
    const IMPS_ACCOUNT = "IMPS_ACCOUNT";

    /**
     * INVESTMENT_ACCOUNT
     */
    const INVESTMENT_ACCOUNT = "INVESTMENT_ACCOUNT";
}

class DefaultAsset
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class DirectDebit
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class DivisionIdType
{
    /**
     * INNER_ID
     */
    const INNER_ID = "INNER_ID";

    /**
     * EXTERNAL_ID
     */
    const EXTERNAL_ID = "EXTERNAL_ID";
}

class DivisionType
{
    /**
     * REGION
     */
    const REGION = "REGION";

    /**
     * AREA
     */
    const AREA = "AREA";

    /**
     * BRANCH
     */
    const BRANCH = "BRANCH";

    /**
     * OUTLET
     */
    const OUTLET = "OUTLET";

    /**
     * STORE
     */
    const STORE = "STORE";

    /**
     * KIOSK
     */
    const KIOSK = "KIOSK";

    /**
     * STALL
     */
    const STALL = "STALL";

    /**
     * COUNTER
     */
    const COUNTER = "COUNTER";

    /**
     * BOOTH
     */
    const BOOTH = "BOOTH";

    /**
     * POINT_OF_SALE
     */
    const POINT_OF_SALE = "POINT_OF_SALE";

    /**
     * VENDING_MACHINE
     */
    const VENDING_MACHINE = "VENDING_MACHINE";
}

class DocType
{
    /**
     * KTP
     */
    const KTP = "KTP";

    /**
     * SIM
     */
    const SIM = "SIM";

    /**
     * SIUP
     */
    const SIUP = "SIUP";

    /**
     * NIB
     */
    const NIB = "NIB";
}

class EnableOnly
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class EnableStatus
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class Loyalty
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class OwnerIdType
{
    /**
     * KTP
     */
    const KTP = "KTP";

    /**
     * SIM
     */
    const SIM = "SIM";

    /**
     * PASSPORT
     */
    const PASSPORT = "PASSPORT";

    /**
     * SIUP
     */
    const SIUP = "SIUP";

    /**
     * NIB
     */
    const NIB = "NIB";
}

class ParentRoleType
{
    /**
     * MERCHANT
     */
    const MERCHANT = "MERCHANT";

    /**
     * DIVISION
     */
    const DIVISION = "DIVISION";

    /**
     * EXTERNAL_DIVISION
     */
    const EXTERNAL_DIVISION = "EXTERNAL_DIVISION";
}

class PgDivisionFlag
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

class ResourceType
{
    /**
     * MERCHANT_DEPOSIT_BALANCE
     */
    const MERCHANT_DEPOSIT_BALANCE = "MERCHANT_DEPOSIT_BALANCE";

    /**
     * MERCHANT_AVAILABLE_BALANCE
     */
    const MERCHANT_AVAILABLE_BALANCE = "MERCHANT_AVAILABLE_BALANCE";

    /**
     * MERCHANT_TOTAL_BALANCE
     */
    const MERCHANT_TOTAL_BALANCE = "MERCHANT_TOTAL_BALANCE";
}

class ResultStatus
{
    /**
     * S
     */
    const S = "S";

    /**
     * F
     */
    const F = "F";

    /**
     * U
     */
    const U = "U";
}

class ShopBizType
{
    /**
     * ONLINE
     */
    const ONLINE = "ONLINE";

    /**
     * OFFLINE
     */
    const OFFLINE = "OFFLINE";
}

class ShopIdType
{
    /**
     * INNER_ID
     */
    const INNER_ID = "INNER_ID";

    /**
     * EXTERNAL_ID
     */
    const EXTERNAL_ID = "EXTERNAL_ID";
}

class ShopOwning
{
    /**
     * DIRECT_OWNED
     */
    const DIRECT_OWNED = "DIRECT_OWNED";

    /**
     * FRANCHISED
     */
    const FRANCHISED = "FRANCHISED";
}

class ShopParentType
{
    /**
     * MERCHANT
     */
    const MERCHANT = "MERCHANT";

    /**
     * DIVISION
     */
    const DIVISION = "DIVISION";

    /**
     * EXTERNAL_DIVISION
     */
    const EXTERNAL_DIVISION = "EXTERNAL_DIVISION";
}

class SizeType
{
    /**
     * UMI
     */
    const UMI = "UMI";

    /**
     * UKE
     */
    const UKE = "UKE";

    /**
     * UME
     */
    const UME = "UME";

    /**
     * UBE
     */
    const UBE = "UBE";
}

class Verified
{
    /**
     * true
     */
    const TRUE = "true";

    /**
     * false
     */
    const FALSE = "false";
}

