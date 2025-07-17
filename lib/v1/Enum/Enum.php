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

namespace Dana\\v1\Enum;

class ActorType
{
    /**
     * USER
     */
    const USER = "USER";

    /**
     * MERCHANT
     */
    const MERCHANT = "MERCHANT";

    /**
     * MERCHANT_OPERATOR
     */
    const MERCHANT_OPERATOR = "MERCHANT_OPERATOR";

    /**
     * BACK_OFFICE
     */
    const BACK_OFFICE = "BACK_OFFICE";

    /**
     * SYSTEM
     */
    const SYSTEM = "SYSTEM";
}

class OrderTerminalType
{
    /**
     * APP
     */
    const APP = "APP";

    /**
     * WEB
     */
    const WEB = "WEB";

    /**
     * WAP
     */
    const WAP = "WAP";

    /**
     * SYSTEM
     */
    const SYSTEM = "SYSTEM";
}

class PayMethod
{
    /**
     * BALANCE
     */
    const BALANCE = "BALANCE";

    /**
     * COUPON
     */
    const COUPON = "COUPON";

    /**
     * NET_BANKING
     */
    const NET_BANKING = "NET_BANKING";

    /**
     * CREDIT_CARD
     */
    const CREDIT_CARD = "CREDIT_CARD";

    /**
     * DEBIT_CARD
     */
    const DEBIT_CARD = "DEBIT_CARD";

    /**
     * VIRTUAL_ACCOUNT
     */
    const VIRTUAL_ACCOUNT = "VIRTUAL_ACCOUNT";

    /**
     * OTC
     */
    const OTC = "OTC";

    /**
     * DIRECT_DEBIT_CREDIT_CARD
     */
    const DIRECT_DEBIT_CREDIT_CARD = "DIRECT_DEBIT_CREDIT_CARD";

    /**
     * DIRECT_DEBIT_DEBIT_CARD
     */
    const DIRECT_DEBIT_DEBIT_CARD = "DIRECT_DEBIT_DEBIT_CARD";

    /**
     * ONLINE_CREDIT
     */
    const ONLINE_CREDIT = "ONLINE_CREDIT";

    /**
     * LOAN_CREDIT
     */
    const LOAN_CREDIT = "LOAN_CREDIT";

    /**
     * NETWORK_PAY
     */
    const NETWORK_PAY = "NETWORK_PAY";
}

class PayOption
{
    /**
     * NETWORK_PAY_PG_SPAY
     */
    const NETWORK_PAY_PG_SPAY = "NETWORK_PAY_PG_SPAY";

    /**
     * NETWORK_PAY_PG_OVO
     */
    const NETWORK_PAY_PG_OVO = "NETWORK_PAY_PG_OVO";

    /**
     * NETWORK_PAY_PG_GOPAY
     */
    const NETWORK_PAY_PG_GOPAY = "NETWORK_PAY_PG_GOPAY";

    /**
     * NETWORK_PAY_PG_LINKAJA
     */
    const NETWORK_PAY_PG_LINKAJA = "NETWORK_PAY_PG_LINKAJA";

    /**
     * NETWORK_PAY_PG_CARD
     */
    const NETWORK_PAY_PG_CARD = "NETWORK_PAY_PG_CARD";

    /**
     * VIRTUAL_ACCOUNT_BCA
     */
    const VIRTUAL_ACCOUNT_BCA = "VIRTUAL_ACCOUNT_BCA";

    /**
     * VIRTUAL_ACCOUNT_BNI
     */
    const VIRTUAL_ACCOUNT_BNI = "VIRTUAL_ACCOUNT_BNI";

    /**
     * VIRTUAL_ACCOUNT_MANDIRI
     */
    const VIRTUAL_ACCOUNT_MANDIRI = "VIRTUAL_ACCOUNT_MANDIRI";

    /**
     * VIRTUAL_ACCOUNT_BRI
     */
    const VIRTUAL_ACCOUNT_BRI = "VIRTUAL_ACCOUNT_BRI";

    /**
     * VIRTUAL_ACCOUNT_BTPN
     */
    const VIRTUAL_ACCOUNT_BTPN = "VIRTUAL_ACCOUNT_BTPN";

    /**
     * VIRTUAL_ACCOUNT_CIMB
     */
    const VIRTUAL_ACCOUNT_CIMB = "VIRTUAL_ACCOUNT_CIMB";

    /**
     * VIRTUAL_ACCOUNT_PERMATA
     */
    const VIRTUAL_ACCOUNT_PERMATA = "VIRTUAL_ACCOUNT_PERMATA";
}

class SourcePlatform
{
    /**
     * IPG
     */
    const IPG = "IPG";
}

class TerminalType
{
    /**
     * APP
     */
    const APP = "APP";

    /**
     * WEB
     */
    const WEB = "WEB";

    /**
     * WAP
     */
    const WAP = "WAP";

    /**
     * SYSTEM
     */
    const SYSTEM = "SYSTEM";
}

class Type
{
    /**
     * PAY_RETURN
     */
    const PAY_RETURN = "PAY_RETURN";

    /**
     * NOTIFICATION
     */
    const NOTIFICATION = "NOTIFICATION";
}

