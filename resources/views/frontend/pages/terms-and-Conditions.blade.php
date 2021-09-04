@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"Terms and Conditions"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">USER TERMS AND CONDITIONS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">SELLER SPECIFIC TERMS AND CONDITIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#use">DEFINITIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#legal">GENERAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#collect">FEES, PAYMENTS, AND INVOICING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#rule">RULES OF CONDUCT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#desc">DESCRIPTION OF SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#official">OFFICIAL WEBSITE OF EDROPSHIP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#msg">MESSAGING SYSTEM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#user">USER CONTENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#thrid">THIRD PARTY IP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#avail">AVAILABILITY OF SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#dispute">DISPUTE RESOLUTION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#right">RIGHT OF REFUSAL, SUSPENSION AND TERMINATION POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#int">INTELLECTUAL PROPERTY RIGHTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#dis">DISCLAIMER OF REPRESENTATIONS AND WARRANTIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feed">FEEDBACK & REVIEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#limit">LIMITATION OF LIABILITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#inde">INDEMNITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#data">DATA PROTECTION, USER DATA AND COOKIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#success">SUCCESSORS AND ASSIGNS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#no">NO THIRD-PARTY BENEFICIARIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#governing">GOVERNING LAW</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sever">SEVERABILITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#miscel">MISCELLANEOUS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#titles">TITLES AND HEADINGS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACT DETAILS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#seller">SELLER SPECIFIC TERMS AND CONDITIONS</a>
                            </li>



                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <p>All described terms and conditions define the way of accessing and using the website of eDropShip.<br>

                        By accepting/signing the Terms and Conditions and by using our website, you agree that you have completely read them and you confirm that you will strictly follow all of them. You cannot use or access our website if you do not agree to any of these Terms and Conditions.
                        <br>
                        eDropShip holds the right to update these Terms and Conditions at any point of time. This update can include changes in the document wordings or date of publication. We will try, but cannot assure that users will receive notification of changes. Therefore, we highly recommend you to have a look on these Terms and Conditions as frequently as possible to remain updated with changes.
                        <br>
                        All terms and conditions are defined below.
                        <br>
                        After signing in, you confirm that you are legally bound to follow these terms and conditions. These terms and conditions are the legal contract between the users of the website and our company. You are requested to contact our customer support team in case of any assistance regarding utilization of services or different processes i.e., purchase process, payment process etc.
                        <br>
                        Please send your queries to hello@edropship.co.uk
                        <br>
                        eDropShip has the copyrights of these terms and conditions</p>
                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">USER TERMS AND CONDITIONS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>DEFINITIONS</li>
                                <li>GENERAL</li>
                                <li>FEES, PAYMENTS, AND INVOICING</li>
                                <li>RULES OF CONDUCT</li>
                                <li>DESCRIPTION OF SERVICES</li>
                                <li>OFFICIAL WEBSITE OF EDROPSHIP</li>
                                <li>MESSAGING SYSTEM</li>
                                <li>USER CONTENT</li>
                                <li>THIRD PARTY IP</li>
                                <li>AVAILABILITY OF SERVICES</li>
                                <li>DISPUTE RESOLUTION</li>
                                <li>RIGHT OF REFUSAL, SUSPENSION AND TERMINATION POLICY</li>
                                <li>INTELLECTUAL PROPERTY RIGHTS</li>
                                <li>DISCLAIMER OF REPRESENTATIONS AND WARRANTIES</li>
                                <li>FEEDBACK & REVIEWS</li>
                                <li>LIMITATION OF LIABILITY</li>
                                <li>INDEMNITY</li>
                                <li>DATA PROTECTION, USER DATA AND COOKIES</li>
                                <li>SUCCESSORS AND ASSIGNS</li>
                                <li>NO THIRD-PARTY BENEFICIARIES</li>
                                <li>GOVERNING LAW</li>
                                <li>SEVERABILITY</li>
                                <li>MISCELLANEOUS</li>
                                <li>TITLES AND HEADINGS</li>
                                <li>CONTACT DETAILS</li>
                            </ul>
                        </div>



                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">SELLER SPECIFIC TERMS AND CONDITIONS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>PERFORMANCE OBLIGATIONS FOR SELLERS</li>
                                <li>RETURN, EXCHANGE, AND FAULTY ITEMS</li>
                                <li>REFUNDS</li>
                                <li>SUPPLIER VACATIONS AND TIME AWAY</li>
                                <li>SELLER DISBURSEMENTS</li>
                                <li>ITEM PRICE CHANGES</li>
                                <li>SELLER SUBSCRIPTION</li>
                                <li>SELLING ITEMS ON SALES CHANNELS</li>
                            </ul>
                        </div>






                    </div>
                    <div class="privacy-item" id="use">
                        <h3 class="title">USER TERMS AND CONDITIONS</h3>
                        <h3 class="title">DEFINITIONS</h3>

<div class="section-list-style mt-22 mb-35">
    <ul>
        <li>“Applicable Fee(s)” refers to the fee that is charged to Suppliers by eDropShip for the purpose of accessing and using our Services. This fee also includes “eDropShip Fee” and the “Payment Gateway Fee” that is explained below in the Supplier Disbursements clause.
        </li>
        <li>“Below Standard” refers to the level of User performance that is against the Performance Obligations. Therefore, it can be subjected to disciplinary actions by eDropShip.
        </li>
        <li>“Billing Date” refers to the date when seller will be obliged to pay Subscription Fee. This date is a recurring date that occur after each month and follow the business days of the UK.
        </li>
        <li>“Business Day” refers to the weekdays (Monday to Saturday) for the users of the website. These days exclude the public holidays.
        </li>
        <li>“Business Hours” refers to the time of 09:00 to 18:00 in a Business day for the usage of the website.
        </li>
        <li>“Cancellation Request” refers to the request that is submitted through the website of eDropShip for the cancellation of the order. Furthermore, this request is submitted to the supplier by the seller.
        </li>
        <li>“Compliance Rate(s)” refers to the number of times that a Supplier or Seller needs to meet the requirements of Performance Obligations to avoid any penalty during website usage. Compliance rate is expressed as a percentage in the period of 3 months.
        </li>
        <li>“Delayed Items” refers to the Items that are dispatched from shipping companies but not yet delivered to customers till Delivery Date because of the mismatch of specifications.
        </li>
        <li>“Delivery Date” refers to the date on which the item is collected by the End Consumer that was sent by the Supplier.
        </li>
        <li>“End Consumer” is the final purchaser that has purchased an item from the seller. Sellers may also be subjected to this term.
        </li>
        <li>Exchange Item(s)” refers to the items that are sent back to the supplier along with the request for an alternative Item. An item can be returned back to supplier for multiple reasons i.e., the item was found Faulty, End Consumer changed his/her mind, item did not fit the need, item was not appropriate for the needs etc. The returned item must be unused and undamaged and should be returned in the original packaging.  Please note that these items do not include underwear and other personal hygiene related items.
        </li>
        <li>Faulty Item(s)” refers to the delivered items that are not functioning well, do not matches the description of the required item, are incorrectly dispatched, or do not match with the listed Items. Such items are proved faulty with the help of suitable photographic evidence or are sent back to the Supplier for the purpose of inspection.
        </li>
        <li> “Feedback” refers to the reviews of our customers for the services performed or their suggested changes related to our services.</li>
        <li>“Item(s)” refers to the all products, goods or services that are available for sale by Suppliers on the official website of eDropShip. Items also refer to the products, goods or services that are not included in the clause of ‘Prohibited Items’ in these Terms and Conditions.</li>
        <li>“Item Data” refers to the written information, attributes and images that are provided by the Supplier for the items that are offered for sale on the website of eDropShip.</li>
        <li>“List” or “Listing” or “Listed” refers to the process of ensuring the availability of an item to Sellers and for the purpose of selling them on the official website of eDropShip.</li>
        <li>“Lost Items” refers to the Items that are lost during delivery and are not dispatched to the End Consumer within fifteen (15) Business Days of the Order Date.</li>
        <li>“Notice Period” is the notice of fifteen (15) calendar days that a Supplier is required to give to eDropShip for canceling or suspending their Subscription with eDropShip”.</li>
        <li>“Order(s)” refers to the exchange of items between Suppliers and Sellers by using the platform of eDropShip.</li>
        <li>“Order Amount(s)” refers to the total amount that is charged on an order. This amount also includes taxes and shipping cost (if applicable).</li>
        <li>“Order Cancellation(s)” is the process of canceling an order before its dispatchment.  </li>
        <li>“Order Date” is the date of completion and payment of order.</li>
        <li>“Out of Stock Items” refers to the items that are currently not available for sale by seller or supplier because of insufficient stock.</li>
        <li>“Partial Refunds” is the amount of refund promised by Supplier to the Seller for an Order. This amount is usually less than the Order Amount.</li>
        <li>“Performance Obligations” are the Performance Obligations that are mandatory for Sellers and/or Suppliers to follow.</li>
        <li>“Performance Obligations for Sellers” refers to the standards of performance that are mandatory for Sellers to follow while accessing and using the website of eDropShip. These standards are described below in the clause of Performance Obligations for Sellers.</li>
        <li>“Performance Obligations for Suppliers” refers to the standards of performance that are mandatory for Suppliers to follow while accessing and using the website of eDropShip. These standards are described below in the clause of Performance Obligations for Suppliers.</li>
        <li>“Plan of Action” is a written document that is provided by the website User to eDropShip as a result of any request that was previously issued by eDropShip. Such request can be send for any unacceptable or Below Standard Performance of users. In this document, the user will explain the ways that he or she will follow in order to align his or her performance with the Performance Obligations.</li>
        <li>“Prohibited Item(s)” are the items that cannot be sold on the platform of eDropShip. These items are described below in the clause of Prohibited Items.</li>
        <li>“Remedial Action” refers to the strict actions taken by the full determination of eDropShip such as issuing written non-compliance warnings, changing Tier Status, requesting to submit a Plan of Action, Suspending or Terminating an account, etc.</li>
        <li>“Replacement Item(s)” refer to the items that are dispatched or need to be dispatched by a Supplier to an End Consumer for compensating any unwanted incident such as Fault Items or Lost Item Incident.</li>
        <li>Return Item(s)” refers to the items that are sent back to the supplier along with the request for an alternative Item. An item can be returned back to supplier for multiple reasons i.e., the item was found Faulty, End Consumer changed his/her mind, item did not fit the need, item was not appropriate for the needs etc. The returned item must be unused and undamaged and should be returned in the original packaging.  Please note that these items do not include underwear and other personal hygiene related items. </li>
        <li>“Sales Channel” includes any online platform, third-party marketplace, or portal where buyers and sellers exchange goods and/or services. </li>
        <li>“Seller” or “Sellers” are the online retailers who sell their Items directly to End Consumers through the platform of eDropShip. These sellers can be business entity or an individual person.</li>
        <li> “Services” include all listed services described below in the clause of Description of Services.</li>
        <li>“Spams” are the messages that are delivered to multiple recipients without any rational invitation, especially when UK Data Protection Act 2018 has not provided the permission.</li>
        <li>“Subscription” is the process of becoming a User of eDropShip, either as a Supplier or a Seller, after accepting these Terms and Conditions and availing the Services of eDropShip.</li>
        <li>“Subscription Fee” is the fee that is charged monthly to Sellers for accessing and using the Services and the official website of eDropShip. Sellers choose their preferred payment method for paying this fee. eDropShip hold the complete right to change this fee. This fee is determined on the webpage http://www.edropship.co.uk/pricing/  </li>
        <li>“Subscription Level” defines the level that sellers will hold while accessing and using the official website of eDropShip. This level is determined with the help of monthly Subscription Fee that is paid by the Seller. These levels are described on the webpage of http://www.edropship.co.uk/pricing/. Following are the Subscription Levels that are ranked from lowest to highest:
            <ul>
                <li>“Free Trial Account”</li>
                <li>“Starter”</li>
                <li>“Advanced”</li>
                <li>“Business”</li>
                <li>“Guru”</li>
            </ul>
        </li>
        <li>“Subscription Period” is the period consists of 1 month for which the subscription of Seller is applicable. This period starts each month on the date when Seller made the first Subscription.</li>
        <li>“Supplier” or “Suppliers” are the individual or businesses entities that use the platform of eDropShip for selling their items. These may include the suppliers of Items, wholesalers, manufacturers, brand owners or other inventory owners.</li>
        <li>“Supplier Disbursement Period” is a recurring fifteen (15) calendar day period that starts at around the first (1st) and sixteenth (16th) date of each month or the period that follows UK Business Day. Disbursements that are made on the first (1st) date of each month would be related to the dispatched and completed orders for which funds were not transferred within the twenty-sixth (26th) day of the previous month. Disbursements that are made on the sixteenth (16th) date of each month would be related to the dispatched and completed orders for which funds were not transferred within the tenth (10th) day of the previous month.</li>
        <li> “Support Services” are the services (technical or nontechnical) that are provided to the Users by eDropShip.</li>
        <li>“Suspension” is the process of temporarily blocking the account of the User by eDropShip.</li>
        <li>“Termination” is the process of permanently blocking and/or deleting the account of the User by eDropShip.
        </li>
        <li>“Terms and Conditions” are the guidelines that are described in this document.</li>
        <li>“Third-Party IP” refers to the photographs, illustrations, text content or other images and/or software, widgets, or other applications that are developed, owned, or licensed by our Users or third-party providers, with those eDropShip may contract from time to time. Moreover, these are available to access through the official website of eDropShip.</li>
        <li>“Tier Status” is the level that is assigned to the Users by eDropShip at its solitary preference to each Supplier or Seller through the platform of eDropShip and that is based on their ability to meet or exceed the Performance Obligations.
            <ul>
                <li>“Supplier Tier Status Levels”, ranked lowest to highest are:
                    <ul>
                        <li>“Bronze Supplier(s)”</li>
                        <li>“Silver Supplier(s)”</li>
                    </ul>
                </li>
                <li>“Gold Supplier(s)”
                    <ul>
                        <li>“Platinum Supplier(s)”
                            <ul>
                                <li>“Seller Tier Status Levels”, are ranked lowest to highest are:
                                    <ul>
                                        <li>“General Seller(s)”</li>
                                        <li>“Bronze Seller(s)”</li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li>“Silver Seller(s)”
                    <ul>
                        <li>“Gold Seller(s)”</li>
                        <li>“Platinum Seller(s)”</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>“UK Business Day” refers to the weekdays (Monday to Saturday) for the users of the website. These days exclude the public holidays of UK.
            <ul>
                <li>“UK Business Hours refers to the time of 09:00 to 18:00 in a Business day for the usage of the website to the time in a Business day.</li>
            </ul>
        </li>
        <li>“User(s)” refers to individual(s) or entity(s), including Suppliers or Sellers, who agrees to the Terms and Conditions. They have access to the official website of eDropShip or they can avail the Services that are offered by eDropShip. They are also referred to as “you” or “your”.</li>
        <li>“User Content” refers to any content that is provided to eDropShip by the Users that will be presented and published as part of the Services. The content may include photographs and graphics, audio, video, written content and prose, Item descriptions, Item attributes, and logos or graphical elements and much more.</li>
        <li>“User Data” refers to the personal information of Users that is kept by eDropShip according to the data Privacy Policy of eDropShip.</li>
        <li>“User Default” refers to the failure by the User to perform any required obligation of these Terms and Conditions.</li>
        <li>“Website” or “Websites” means the official and corporate website of eDropShip, https://www.edropship.co.uk/ or any other website, application or web-based portal owned and used by eDropShip for performing the Services or regulating day to day business of eDropShip.</li>

    </ul>
</div>












                        </div>
                    <div class="privacy-item" id="legal">
                        <h3 class="title">GENERAL</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>If you accept these Terms and Conditions and avail the Services of eDropShip, it will show that you have clearly studied and known them and you are legally bound to follow them. These Terms and Conditions are applicable to anyone who access or use our website.</li>
                                <li>If you do not accept any part of the Terms and Conditions or the Subscription, you should immediately notify us by writing to us, and you are suggested not to access and use the Services of the official website of eDropShip during this time. If you find any instability between the provisions of these Terms and Conditions or any provision was made during the completion of the Subscription, then the provisions of these Terms and Conditions must be prevailed.</li>
                                <li>Apart from these Terms and Conditions, you are also legally bound to follow separate terms and conditions for Sales Channels, shipping/logistics providers, inventory management systems or other external platforms that you use while availing the services of eDropShip.
                                    <ul>
                                        <li>Such terms and conditions are separate from the original Terms and Conditions, and eDropShip is not responsible for your agreement with all of them.</li>
                                        <li>If your behavior stops you from trading your items on your preferred Sales Channel, this will be ineffective on your obligations or contractual obligations with eDropShip.</li>
                                    </ul>
                                </li>
                                <li>All offered Services of eDropShip are only available to Users who are eligible for forming legal contracts, as per the law. After signing in and availing the Services of eDropShip, you permit and confirms that:
                                <ul>
                                    <li>You are eighteen (18) years old or above;</li>
                                    <li>You are legally allowed to form legal contracts as per the laws;</li>
                                    <li>You are not availing the Services of eDropShip as an agent of any other person or entity. You confirm that you are availing the Services as principal. In case of not using the service as principal, you agree to the terms and Conditions of those;</li>
                                    <li>Your usage of Services does not violate or conflict with any applicable law. Moreover, your usage of Services does not violate or conflict with any provision of your constitutional documents, any order or judgment of any court or other agency of government or any of your assets or any contractual restriction binding on or affecting you or any of your assets;</li>
                                    <li>You agree that you will comply in all material respects with all applicable laws and orders to which you may be subject. Failure to comply with these laws and orders would materially impair your ability to perform your obligations while using the Services; and</li>
                                    <li>You are not legally barred from the exchange of Services.</li>
                                </ul>
                                </li>
                                <li>If you are accepting these Terms and Conditions as a corporate entity, you represent and authorize that you are legally allowed to bind to these Terms and Conditions as corporate entity. In such situation, the terms ‘you’, ‘your’, ‘User’ or ‘Users’ will refer to the corporate entity. After the acceptance of these Terms and Conditions, if we find that you are not legally eligible for forming legal contracts as corporate entity, you will be personally responsible for the obligations that are incorporated in this document, such as payment obligations and much more.</li>
                                <li>eDropShip will not be held responsible for any loss or damage that can result from eDropShip’s reliance on any instruction, notice, document, or communication that is reasonably believed by eDropShip to be genuine and originating from an authorized representative of you or your corporate entity. If you have doubts about any such instruction, notice, document, or communication, eDropShip holds the right (but undertakes no duty) to require additional authentication from you. You also agree to be bound by the provisions of these Terms and Conditions for transactions entered into by you, anyone acting as your agent and anyone who uses your account or the Services, whether or not authorized by you.</li>
                                <li>eDropShip does not offer or guarantee the exclusivity to you, or any other User of the offered Services. eDropShip holds the right to provide access to the Services and Website to any business or individual of its choice, even if the new User is the competitor of an existing User.</li>
                                <li>You are responsible for the maintenance of the security of your account. You are merely responsible for all the activities that happened through your authorized or unauthorized account. You are responsible for keeping your account's information and passwords secure. We are not responsible for any unauthorized access or use of your account. If you are doubtful that your password is misused, you can take several actions to stop unauthorized use such as changing password, or asking someone else to change on your behalf, or contacting our customer support team for the discussion of the status of your account etc.</li>
                                <li>eDropShip holds the right to contact you for the Services or for marketing purposes related to you through telephone, email, or other contact details that are provided by you during the process of registration of your Subscription. We will not contact you if you have advised us not to contact and you have requested to remove your details in line with the UK’s GDPR requirements. In such scenario, we will immediately remove your details from our customer database and we will not further contact you.</li>
                                <li>During the process of registering your Subscription, you may be required to submit additional and independent documentation for further verification of your identity. This additional documentation may include your passport or evidence of company registration and other identifying information.</li>
                                <li>If there is any dispute related to eDropShip account ownership, eDropShip holds the right to solely judge correct account ownership, and to transfer the account to the original and legal account holder. In case such dispute is not resolved, eDropShip will suspend the account and halt disbursement of any funds until the solution of this dispute.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="collect">
                        <h3 class="title">FEES, PAYMENTS, AND INVOICING</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>All types of credit and debit cards are acceptable for the payment of the Services of eDropShip.</li>
                                <li>We hold the complete right to change or modify the prices or fees that we charge on Users for accessing the official website of eDropShip and its services at any time. These changes or modifications will be immediately posted on the official Website of eDropShip and will be updated in these Terms and Conditions. We are not obligatory to send you any notice for the applicability of such changes.</li>
                                <li>All payments from Sellers to Suppliers are instructed by eDropShip. Credit card or account information is not saved anywhere on our systems.
                                </li>
                                <li>eDropShip takes the responsibility of all payments that are made using the platform of eDropShip. This responsibility includes refunds, chargebacks, cancellations, and dispute resolution.
                                <ul>
                                    <li>eDropShip will offer the first line of support in case of any payment dispute, raised by a User of eDropShip, and we will refund the payment if any relevant complaint is found. eDropShip reserves the right to take decisions on such matters.</li>
                                    <li>In case of chargeback, we will respond to the networks of credit or debit card on behalf of the User(s) that was/were involved in the transaction. The User(s) involved agrees to provide any requested information to us, and we hold the right to recoup any outlays that are associated with the process of chargebacks.</li>
                                    <li>If you find any issue in the Subscription process, you can contact us through email (hello@edropship.co.uk) or you can also call us on our telephone during office hours on +44 7958 557597</li>
                                </ul>
                                </li>
                                <li>eDropShip is bound to monitor the content of the transactions that we process for our Users, and the Users involved in this process according to the UK Money Laundering, Terrorist Financing and Transfer of Funds (Information on the Payer) Regulations 2017. We hold the right to refuse or withdraw access to the official website of eDropShip or block payments as required.</li>
                                <li>Usually, Direct Debits are not accepted on eDropShip. However, if we accept such payments in the rare exception, we will regulate payments through an appropriate Direct Debit agreement. In case of any error, The Direct Debit Guarantee will cover refunds by the bank or building society. eDropShip is responsible for refund or other compensation if any error is claimed. You will be charged for the penalty of £20 + VAT per refused payment when any Direct Debit payments are refused.</li>
                                <li>Any monies held by eDropShip on behalf of Users will be held in a separate bank account to that of our primary operating account(s). Or these monies are held with our external payment gateway provider for as long as reasonably possible prior to disbursement by us. These monies shall be held in the currency in which they were received.</li>
                                <li>eDropShip reserves the right to charge interest on any overdue invoices, from the date when payment becomes due until the date of payment at a rate of 2% per annum above the Bank of England base rate from time to time. Such interest shall accrue on a daily basis from the due date until payment of the overdue amount is received by us, whether before or after judgment. The User shall pay the interest together with the overdue amount.</li>
                                <li>eDropShip will generate and provide invoices for Orders and will make them available to the relevant Users. We do not represent or warrant their complete accuracy at all times and accept no liability for any errors, omissions, or inaccuracies. These errors, omissions, or inaccuracies can be related to the calculation of any applicable taxes or shipping charges as the invoices are provided as part of the Services. You confirm that you are completely responsible for validating the accuracy of the invoices provided by eDropShip and you must report any known errors to eDropShip so that we can investigate and resolve the matter.</li>
                                <li>The word "sensitive personal information" applies to information from individuals and companies that can be used by us to determine the identity of individuals and companies. This confidential personal information is usually
                                    made up of the following data:</li>
                                <li>All Users are legally bound to pay all amounts owing to eDropShip in full without any set-off, counterclaim, deduction or withholding (except for any deduction or withholding that is required by law).</li>
                                <li>eDropShip holds the right to suspend or terminate the Services if you are unable to make payment according to the terms set out in any outstanding invoice. If eDropShip provides you with more than one service, we hold the right to suspend or terminate all Services until payment procedure is completed and all outstanding balances are cleared.</li>
                            </ul>

                        </div>

                    </div>
                    <div class="privacy-item" id="rule">
                        <h3 class="title">RULES OF CONDUCT</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>The user should follow the following guidelines, according to these Terms and Conditions, to enable the operations of eDropShip:
                                    <ul>
                                        <li>Co-operate with eDropShip as soon as possible;</li>
                                        <li>Provide information to eDropShip that is reasonably required by eDropShip for providing the Services;</li>
                                        <li>Get all required permissions, licenses and consents which may be required before the commencement of the Services; and</li>
                                        <li>Maintain accurate, complete, and updated information about you and your eDropShip account, including your registered payment method.</li>
                                    </ul>
                                </li>
                                <li>If performance of any of the obligations of eDropShip, as per these Terms and Conditions, are prevented by any action by the User or User Default:
                                    <ul>
                                        <li>Without any limit, eDropShip holds the right to suspend performance of the Services until the User remedies the User Default, and to rely on the User Default to relieve it from the performance of any of its obligations under these Terms and Conditions to the extent the User Default prevents or delays eDropShip performance of any of its obligations;</li>
                                        <li>eDropShip is not liable for any costs or losses sustained or incurred by the User arising directly or indirectly from eDropShip’s failure or delay to perform any of its obligations; and</li>
                                        <li>The User shall indemnify eDropShip on written demand for any costs or losses that are incurred directly or indirectly by eDropShip.
                                        </li>
                                    </ul>
                                </li>
                                <li>The User will be required to pay damages to eDropShip if User purports to terminate or cancel the agreed Services that are mentioned in these Terms and Conditions. The charges will be equal to the full amount of any unpaid fees and any other direct or indirect losses or costs that are incurred by eDropShip because of such purported termination or cancellation.</li>
                                <li>You admit and accept that:
                                    <ul>
                                        <li>You will use the Services in the way that is mentioned in the Terms and Conditions that will be applied on all local, and international laws, rules, and regulations. These services will also include any User Content.
                                        </li>
                                        <li>You must provide accurate, free of error, true and updated information to us through the use of the official Website(s) of eDropShip.
                                        </li>
                                        <li>You should ensure that anyone who accesses our Website(s) through your internet connection, or on your behalf, are aware of and comply with these Terms and Conditions.</li>
                                        <li>We don’t have any liability to you for any loss of profit, loss of business, business interruption, or loss of business opportunity as a direct or indirect result of providing the Services to you.
                                        </li>
                                        <li>You will back-up all of your User Content so that you can access and use it when you need because eDropShip does not guarantee that it backs up User Content. Therefore, you agree that you accept the risk of loss of any and all of your User Content.
                                        </li>
                                        <li>You acknowledge that eDropShip holds the right to call you from time-to-time about your Subscription. Therefore, you give us the right to record these calls, regardless of the permission on each call. Moreover, you agree that such recording(s) can be submitted as evidence in any legal proceeding, according to the law. In such proceedings, eDropShip will be act as a party.
                                        </li>
                                        <li>eDropShip holds the right to modify, change, or discontinue any aspect of the Services at any time, for any reason at its complete determination. eDropShip will update these Terms and Conditions accordingly in such condition.
                                        </li>
                                    </ul>
                                </li>
                                <li>Users are not allowed for:
                                    <ul>
                                        <li>Conducting automated or systematic data collection activities on our Website(s) (scraping, data mining, data extraction or data harvesting) without our permission.
                                        </li>
                                        <li>Collecting or harvesting (or permitting someone else for collection or harvesting) any User Content or any non-public or personally identifiable information about another User or any other person or entity without taking written permission from us.
                                        </li>
                                        <li>Using our Website(s)  or any action available on our Website(s) in a way that:
                                            <ul>
                                                <li>Is illegal, fraudulent, harmful, or unlawful, or in connection with illegal, fraudulent, harmful, or unlawful activity;</li>
                                                <li>Encourages or engages child or any other illegal pornography or the exploitation of children or adults;</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Encourages or engages in terrorism, violence against people, animals, or property;
                                    <ul>
                                        <li>Encourages or engages in any Spam or other unsolicited bulk emails, or computer or network hacking or cracking.
                                        </li>
                                        <li>Infringes on the intellectual property rights of another User or any other person or entity;
                                        </li>
                                        <li>Violates the privacy or publicity rights of another User or any other person or entity, or breaches any duty of confidentiality that you owe to another User or any other person or entity;
                                        </li>
                                    </ul>
                                </li>
                                <li>Interferes with the operation of the Services;</li>
                                <li>Contains or installs any viruses, worms, bugs, Trojan horses or other code, files or programs that are designed to, or capable of, disrupting, damaging, or limiting the functionality of any software or hardware; or
                                    <ul>
                                        <li>Undertaking transactions related to exchange of Items that are outside of the platform of eDropShip.</li>
                                        <li>Seeking to influence or encourage any other User to cease from using the Services of eDropShip;</li>
                                        <li>Modifying or altering any part of the Services or any of its related technologies.</li>
                                        <li>Accessing the content or User Content of eDropShip through any technology or mean that is not provided or designated by eDropShip.</li>
                                        <li>Excepting where you own/control the appropriate rights or with our explicit written permission:</li>
                                        <li>Displaying, redistributing or republishing any material from our Website(s) in public or in private, that will include our logo, slogan, mission statement and other copyright materials without taking written permission from us;</li>
                                        <li>Sub-licensing, selling, or renting material from our Website(s);
                                        </li>
                                        <li>Exploiting or profiting from material of our Website(s) for a commercial purpose other than in relation to the Services being offered;
                                        </li>
                                        <li>Using the data that is collected from our Website(s) for the purposes of contacting individuals, companies, or other persons, other than in connection with the Services that are offered and in compliance with these Terms and Conditions.
                                        </li>
                                        <li>Using our Website or an action available on our Website(s) in a way that can damage, or otherwise impair the functioning of the Website(s) and its provision of the Services.
                                        </li>
                                        <li>Using our Website(s) for hosting, storing, copying, sending, transmitting, using, publishing or distributing material that is linked to, or of use to any software that could be described as a computer virus, Trojan, key logger, spyware, rootkit or other malicious software product.
                                        </li>
                                        <li>Accessing, or using our Website(s) through a spider, robot, or other automated means without taking permission from us.
                                        </li>
                                        <li>Modifying the paper or digital copies of any materials that you have printed or downloaded from our Website(s) in any way, or using any illustrations, photographs, video or audio sequences or any graphics separately from any accompanying text.
                                        </li>
                                        <li>Using data that was originated on our Website(s) for direct marketing activities that include telemarketing, SMS marketing, email marketing and direct mailing, without any restrictions.
                                        </li>
                                        <li>Editing or changing our Website’s content without our permission.
                                        </li>
                                        <li>Re-selling or providing the Services for a commercial purpose, including any related technologies of eDropShip, without taking written permission from eDropShip.
                                        </li>
                                        <li>Purchasing or acquiring search engine or other pay-per-click (such as Google Adwords) keywords or domain names reference or using eDropShip, its trademarks or variations and misspellings.
                                        </li>
                                        <li>Circumventing, disabling or interfering with the features that are related to security of the Services (including those features that prevent or restrict the usage or copy of any eDropShip content or User Content without limiting) or enforcing limitations on the usage of the Services, any eDropShip content or the User Content therein.
                                        </li>
                                    </ul>
                                </li>
                                <li>We do not have tolerance regarding the transmission of email Spam or any other type of communications related to Spam. We crucially work on monitoring all traffic to and from our servers for indicating the spamming and maintaining a Spam abuse complaint Centre to register allegations related to Spam abuse. Users that are found suspected for using our Services for the purpose of sending Spam will be fully investigated. If we found any Spam related problem, appropriate actions are taken for resolving the situation. Such actions can include the suspensions or termination of your access to the Services of eDropShip.</li>
                            </ul>
                        </div>

                    </div>
                    <div class="privacy-item" id="desc">
                        <h3 class="title">DESCRIPTION OF SERVICES</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>The range of provided Services by eDropShip to its Users and enclosed by these Terms and Conditions are consisted of all Services that are reasonably related to the provision of the website of eDropShip.
                                <ul>
                                    <li>The provided Services include but are not limited to:
                                        <ul>
                                            <li>Access of unique User account to the official website of eDropShip;</li>
                                            <li>As applicable, Direct system integration between the User of the system(s) and the official website of eDropShip;</li>
                                        </ul>
                                    </li>
                                </ul>
                                </li>
                                <li>Access of Supplier to Sellers;
                                    <ul>
                                        <li>Access of Supplier to the official website of eDropShip Item catalogue into which Suppliers can upload their Item inventory;
                                        </li>
                                        <li>Access of Seller to Suppliers and their Item inventories;
                                        </li>
                                        <li>Facilitation of Orders between Suppliers, Sellers, and the Sales Channels they use;
                                        </li>
                                    </ul>
                                </li>
                                <li>Access to the services of payment and invoicing for Suppliers and Sellers;
                                </li>
                                <li>Provision of shipping label integrations and printing for Suppliers;
                                    <ul>
                                        <li>Provision of Sales Channel/website integrations for Sellers with the official website of eDropShip and potential tools for assistance in the Item Listing process;
                                        </li>
                                        <li>Automated Order processing and inventory synchronization;
                                        </li>
                                        <li>Automated data report generation;
                                        </li>
                                    </ul>
                                </li>
                                <li>Support Services that are described below; and</li>
                                <li>Any other features, tools or services that may become available on the official website of eDropShip as per the complete purpose of eDropShip.
                                <ul>
                                    <li>Support Services are the services that are provided by eDropShip to its Users for supporting the Users for easing the accessibility of the Services. Support Services include but are not limited to:
                                        <ul>
                                            <li>Telephone support;</li>
                                            <li>Email support;</li>
                                        </ul>
                                    </li>
                                </ul>
                                </li>
                                <li>Web-based support, including via live-messenger chat and internal ticket systems;
                                    <ul>
                                        <li>Social media channels; and</li>
                                        <li>Support delivered by any other appropriate communications medium.
                                            <ul>
                                                <li>Appropriate Support Services are provided to customers after the determination by eDropShip. These Support Services may or may not vary depending on the User’s Tier Status;
                                                </li>
                                                <li>All these Support Services are available within UK Business Hours. Support Services can be extended to cover additional time zones and international jurisdictions by our complete discretion.
                                                </li>
                                                <li>These Services do not include:

                                                    <ul>
                                                        <li>eDropShip accepting any legal ownership, responsibility, or liability for any of the Items purchased, sold, or exchanged on our official website. You specifically accept and understand that eDropShip provides you with access to our official website where Suppliers offer Items to Sellers and make them available for sale, while Sellers source Items from Suppliers and sell them on various third-party Sales Channels to End Consumers. eDropShip is not directly involved in, or a party to, any transactions between Suppliers and Sellers regarding these Items and accepts no liability or responsibility that can arise from them;</li>
                                                        <li>eDropShip providing any tax, legal or accounting related services or advice to any User; or</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>eDropShip imposing any price controls on Sellers in relation to the Items they sell.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="official">
                        <h3 class="title">OFFICIAL WEBSITE OF EDROPSHIP</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Following terms are defined by us in written documents:
                                    <ul>
                                        <li>eDropShip has the ownership and control on the copyright and intellectual property rights of the official website of eDropShip and the material contained within it, and;</li>
                                        <li>The copyright and the intellectual property rights are reserved for all the material on the official website of eDropShip.</li>
                                    </ul>
                                </li>
                                <li>During using the Services, you should be:
                                    <ul>
                                        <li>Using a suitable web browser to view the pages of our Website(s);</li>
                                        <li>Downloading pages from our Website(s) for the purpose of caching in a web browser;</li>
                                        <li>Printing content from the pages of our Website(s) or Marketplace;</li>
                                        <li>Streaming video and audio content that is provided through our Website(s).</li>
                                    </ul>
                                </li>
                                <li>The official website of eDropShip and its content is only for use by yourself for your personal and business related purposes. No other use is allowed to you.</li>
                                <li>We hold the right to constraint your access to all or part of our Website(s) at our sole determination. You are not allowed to bypass or circumvent these restrictions for gaining access to those areas.</li>
                                <li>Whereas eDropShip will use all reasonable efforts to ensure the following, but we cannot guarantee or represent:
                                    <ul>
                                        <li>The information published on our Website(s) would be complete or accurate;</li>
                                        <li>The material presented on the Website(s) is updated; or</li>
                                        <li>Our Website(s) or any service on it will remain available for Users.</li>
                                    </ul>
                                </li>
                                <li>We cannot confirm that our Website(s) will be secure or free from bugs or viruses. You have the sole responsibility to configure your information technology, computer programs and third-party platforms for accessing our Website(s). You are suggested to use your own virus protection software and ensure that it remains active and updated.
                                </li>
                                <li>We hold the right to change or amend our Website(s) or any aspects that may include User Content, Items, Item Data or Third Party-IP any time at the sole determination of us. We bring these changes without notifying you.
                                </li>
                                <li>eDropShip holds the right to remove or amend any Item(s) from our Website(s) any time at our complete determination. We bring these changes without notifying you.
                                </li>
                            </ul>
                            </div>
                    </div>
                    <div class="privacy-item" id="msg">
                        <h3 class="title">MESSAGING SYSTEM</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>All Users are legally bound to communicate to other Users via the eDropShip Messaging System only.</li>
                                <li>Messages related to the Services are not allowed through using external messaging systems or email.</li>
                                <li>You should immediately notify us if any other User attempts to contact you outside of the eDropShip Messaging System.</li>
                            </ul></div>
                    </div>
                    <div class="privacy-item" id="user">
                        <h3 class="title">USER CONTENT</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>By posting or publishing User Content on our Websites, you acknowledge and guarantee to eDropShip that:
                                    <ul>
                                        <li>The User Content does not violate the rights of any third-party;</li>
                                        <li>You grant eDropShip an unhampered worldwide, irrevocable, non-exclusive, royalty free, sub-licensable (through multiple tiers) and transferable license for using, updating, reproducing, publishing, storing, distributing, adapting, displaying and preparing derivative works and combining with other works your User Content related to the Services that we provide you. You include this without limitation, for the purpose of promotion and redistribution of all or part in any media formats and through any media channels without restrictions of any kind and without payment or other consideration of any kind, or permission or notification, to you or any third-party. Explicitly, we also reserve the right to use this content on our Website(s), or as part of our general promotional content.</li>
                                        <li>After uploading your content on the official website of eDropShip, User Content cannot be amended or changed without the validation and approval by eDropShip or without waiving this right. This clause is existed for preserving the integrity of our data catalogue and for preventing automated software programs from making incorrect changes to User Content.</li>
                                        <li>Therefore, you grant that each User of these Services holds a non-exclusive license for accessing your User Content (except the User Content that you entitle private or password protected) through the Services, and for using, reproducing, distributing, preparing derivative works of, combining with other works, displaying, and performing your User Content as acceptable through the functioning of Services and under these Terms and Conditions.</li>
                                        <li>You are completely responsible for any and all of your User Content or User Content that you publish, post, display, link, or make available as part of your usage of the Services or the official website of eDropShip, and the consequences, and requirements for distributing it.</li>
                                    </ul>
                                </li>
                                <li>eDropShip holds the right (but accepts no responsibility) for deciding whether any User Content is appropriate and/or complies with these Terms and Conditions. eDropShip reserves the right to remove any User Content posted on a website or platform hosted by eDropShip and/or terminate access of a User to the Services for posting or publishing any material that violate these Terms and Conditions (as determined by eDropShip in its complete and utter discretion), at any time without any prior notice.</li>
                                <li>You acknowledge and accept that eDropShip reserves the right of retaining (but not distributing, displaying, or performing) server copies of your User Content that have been removed or deleted. The above licenses granted by you in your User Content are continuous and unalterable. Notwithstanding anything to the contrary contained herein, eDropShip shall not use any User Content that has been designated private or password protected by you for the purpose of promotion of eDropShip.</li>
                                <li>If you are using the Services from a different country in which our servers are located, your communications with us may result in the transfer of information (that includes your account information and User Content) across international boundaries. By accepting these Terms and Conditions and communicating electronically with us, you give us the right of such transfers.</li>
                            </ul>
                        </div>

                    </div>


                    <div class="privacy-item" id="thrid">
                        <h3 class="title">THIRD PARTY IP</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>For using any Services, you may be allowed to use certain Third-Party IP.
                                </li>
                                <li>If you use any Third-Party IP, you accepts and undertake that:
                                    <ul>
                                        <li>The Third-Party IP has not been sold or distributed to you;</li>
                                        <li>You will not on-sell or further distribute the Third-Party IP;</li>
                                        <li>You may use the Third-Party IP only as part of the Services;</li>
                                        <li>You may not remove, modify, or obscure any copyright, trademark, or other proprietary rights notices that are contained within Third-Party IP;</li>
                                        <li>eDropShip is not responsible or liable for the accuracy, content or a claim contained within the Third-Party IP in any way and is only acting as a passive channel in facilitating your accessibility and usage of such Third-Party IP.</li>
                                    </ul>
                                </li>
                                <li>If the Third-Party IP is complemented with or requires consent to a license agreement from the third-party provider, your usage of the Third-Party IP is subject to the terms and conditions of such license agreement, which are in addition to (not in lieu of) the provisions of these Terms and Conditions.</li>
                                <li>We may provide your personal or corporate information to third-party providers as the requirement for providing the Third-Party IP.</li>
                                <li>We hold the right, at our complete determination, for the modification, changes, or discontinuation of the usage of the Third-Party IP at any time. You accept to cooperate in performance in any steps that are necessary for the implementation of this.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="avail">
                        <h3 class="title">AVAILABILITY OF SERVICES</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>We shall endeavor to provide the Services at all times that are subjected to these Terms and Conditions and to the extent it is reasonably practicable and applicable.</li>
                                <li>However, we cannot ensure that our Website(s), or any content on them, will always be available or be uninterrupted and we may be suspending, withdrawing, discontinuing or changing all or any part of our Website(s) without any prior notice.</li>
                                <li>You accept and undertake that from time to time the Services may be inaccessible or inoperable for any reason that can include equipment or server malfunctions; periodic maintenance, repairs or replacements and much more that we undertake from time to time; or causes beyond our control or that are not reasonably foreseeable that can include interruption or failure of telecommunication or digital transmission links, hostile network attacks, network congestion or other failures and much more.</li>
                                <li>You accept and understand that we do not have complete control over the availability of our Website(s), or the Services on a continuous or uninterrupted basis, and that we held no liability to you or any other User regarding the availability or unavailability of the Services.</li>
                                <li>eDropShip will be taking reasonable efforts for communicating the cause for any interruptions in delivering the Services and attempting to resolve them as soon as possible.
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="privacy-item" id="dispute">
                        <h3 class="title">DISPUTE RESOLUTION</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>The relevant Users should cordially resolve the matter of dispute if any dispute is occurred between them. For resolving such disputes, they should use the eDropShip Messaging System or other tools and features that are provided on the official website of eDropShip</li>
                                <li>User can escalate the dispute to eDropShip for settlement using the dispute escalation feature within the eDropShip or by contacting the eDropShip customer service team if the dispute is not agreeably resolved.
                                </li>
                                <li>At its complete discretion, eDropShip will investigate the dispute and issue a ruling to the relevant Users after receiving any such escalation request. Users shall be bound for this ruling.
                                      </li>
                                <li>Each User will be allowed for one appeal to any ruling, but only if the User has material information that eDropShip does not considered previously or wishes to correct a material fact or omission. eDropShip will review the appeal and at its complete discretion, and will issue a final ruling for that the Relevant Users shall be bound.
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="privacy-item" id="right">
                        <h3 class="title">RIGHT OF REFUSAL, SUSPENSION AND TERMINATION POLICY</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>eDropShip holds the right of refusing the process of opening an account and granting anyone’s access to the Services, for any reason and at any time at its complete determination. A full refund for the current Subscription Period will be given in such situation, where applicable and subject to these Terms and Conditions.</li>
                                <li>eDropShip particularly possess the right of denying, cancelling, terminating, suspending, freezing, or modifying access to (or control of) any account or Services for any reason (as decided by eDropShip in its exclusive and complete decision) that includes non-payment, violation of legal statutes, usage of our services for the production and distribution of Spam, publishing any material that violates these Terms and Conditions or operating your account in an inconsistent manner with these Terms and Conditions and much more.</li>
                                <li>eDropShip explicitly holds the right of denying, canceling, terminating, suspending, freezing or modifying access to (or control of) any account or Services if exchange of any Prohibited Items is found, or found to be in inconsistent with the Money Laundering, Terrorist Financing and Transfer of Funds (Information on the Payer) Regulations 2017.</li>
                                <li>All requirements of these Terms and Conditions which by their nature should survive termination shall survive termination/ these may include provisions regarding the ownership, warranty disclaimers, intellectual property, indemnity, and limitations of liability.</li>
                                <li>If you directly or indirectly, verbally or in writing, abuse or threaten any employee, officer or representative of eDropShip through any mean such as through social media, then your account will be terminated immediately. Any further account that you attempt to open will also be terminated, without refund.</li>
                                <li>We may ask Users to submit a remedial Plan of Action if the account is suspended because of underperformance regarding User’s Performance Obligations. In this plan, you will be showing your plan of how you will be improving your performance in accordance with Performance Obligations and ensuring to avoid such actions in future as much as possible. eDropShip possess the right to permanently suspend and terminate the account if user fails to provide this plan or suitable detail and explanation.</li>
                                <li>In case of eDropShip’s withdrawal, suspension, or termination of its Services because a User’s failure to comply with these Terms and Conditions or for any other reason, eDropShip will not be liable, in its exclusive determination, for any costs or obligations that a you User may incur because of this or have to any third parties.</li>
                                <li>In the complete and exclusive decision, eDropShip holds the right to remove and destroy any data and files stored by User on its servers in case of termination of the access to the services.</li>
                            </ul>
                        </div>

                    </div>


                    <div class="privacy-item" id="int">
                        <h3 class="title">INTELLECTUAL PROPERTY RIGHTS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>We own or have the licensee of all intellectual property rights on the material contained or published on our Website(s). All works are protected by copyright laws and treaties around the world. All rights are reserved by eDropShip.</li>
                                <li>All features of design, branding, text content, User interface, User experience and functionality of the official website of eDropShip and underlying technology and code associated with them, are the exclusive property of eDropShip that cannot be copied, redistributed or sold without taking written permission from eDropShip.</li>
                                <li>eDropShip exclusively own all intellectual property rights in or arising out of or related to the Services of eDropShip.</li>
                                <li>You understand that you use any third-party intellectual property rights after obtaining a written license from the relevant licensor as necessary as such usage is conditional on eDropShip. You will also obtain written license from license provider and will agree on such terms that will entitle eDropShip to license such rights to you. Please note that these Terms and Conditions are further addition to the Third-Party IP.</li>
                            </ul>
                        </div>

                    </div>

                    <div class="privacy-item" id="dis">
                        <h3 class="title">DISCLAIMER OF REPRESENTATIONS AND WARRANTIES</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>You explicitly accept and approve that you will use our Services at your own risk. We provide these Services on an ‘as is’ basis, ‘as available’ and ‘with all faults’. We deny all indirect warranties of title, merchantability, fitness for a particular purpose or non-infringement, as done by our third-party service providers.</li>
                                <li>You explicitly accept and approve that eDropShip does not provide any oral or written information or advice and/or all third-party service providers of eDropShip will disclose their identity where it may be commercially sensitive without giving prior written permission.</li>
                                <li>We are not responsible to you for any business losses that you bear during our Services, that includes (without limitation) loss or damage to profits, income, revenue, production, your general business, contracts, commercial opportunities or goodwill.</li>
                                <li>We are not responsible to you for any special, indirect, or consequential loss or damage.</li>
                                <li>We are not responsible to you for any losses that you bear because of any event or events that are beyond our reasonable control.</li>
                                <li>We are not responsible to you for any loss or corruption of any data, database, or software.</li>
                                <li>You agree that we limit the personal liability of our officers and employees as per our interest. Upon respecting our interest, you agree that we are a limited liability entity; you agree that you will not claim personally against our officers or employees regarding any losses that you bear in relation to the Website(s) or these Terms and Conditions (this will not, of course, limit or exclude the liability of the limited liability entity itself for the actions and omissions of our officers and employees, subject to applicable restrictions that are set out in these Terms and Conditions).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="feed">
                        <h3 class="title">FEEDBACK & REVIEWS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Feedback can be directly with the User, within the website or through external and public channels that can include social media and review websites that are outside the control of eDropShip.</li>
                                <li>Such Feedback will not be construed as obligating to eDropShip for action, confidentiality, or expectation of compensation under any circumstances.
                                </li>
                                <li>After your Feedback submission on eDropShip (directly or through a third-party service or platform), you cannot claim any and all rights over that Feedback’s content. eDropShip has right to implement or use that Feedback, whether wholly or after its own modification, without asking a license from you, or from the third-party whose platform was used for the Feedback.
                                </li>
                                <li>After your Feedback submission on eDropShip (directly or through a third-party service or platform), you cannot claim any and all rights over that Feedback’s content. eDropShip has right to implement or use that Feedback, whether wholly or after its own modification, without asking a license from you, or from the third-party whose platform was used for the Feedback.
                                </li>
                                <li>You are not allowed for using a false e-mail address or false identification credentials and manipulating or creating false Feedback in the Feedback submission process.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="limit">
                        <h3 class="title">LIMITATION OF LIABILITY
                        </h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>eDropShip and its third-party providers are not responsible of any direct, indirect, incidental, special, punitive, or consequential damages to you or any other person or third-party entity in any event, irrespective of the reason.
                                </li>
                                <li>eDropShip is not responsible to any Seller(s) in case of underperformance of one or more Suppliers and explicitly regarding the Performance Obligations for Suppliers. This underperformance can include failure of any Supplier to deliver Items or any Item found to be defective, or any contradictions between the Items ordered by End Consumer and delivered by the Supplier.
                                </li>
                                <li>eDropShip is not responsible to any Supplier(s) in case of underperformance of one or more Sellers and explicitly regarding the Performance Obligations for Sellers.
                                </li>
                                <li>eDropShip is not responsible for any predictable or unpredictable costs, expenses, losses, liabilities or damages of any kind or nature (including, without limitation, legal fees) that are incurred by any Users because of the activities or delays of other Users. . These may include claims that are made by Sellers regarding the activities or delays that are taken by Suppliers and vice-versa.
                                </li>
                                <li>eDropShip is explicitly not responsible to any User for any direct or indirect loss or damage, whether in contract, tort (including negligence), breach of statutory duty, contract, even if foreseeable, that may arise related to the:
                                    <ul>
                                        <li>Usage of, or inability to use, the Services or the official website of eDropShip;</li>
                                        <li>Usage of or reliance on any content displayed on our Website(s);</li>
                                        <li>Usage of or reliance on User Content, Item Data or Third Party-IP;</li>
                                        <li>Loss of profits, sales, business, or revenue;</li>
                                        <li>Business interruption;</li>
                                        <li>Loss of money or anticipated savings;</li>
                                        <li>Loss of information;</li>
                                        <li>Loss of business opportunity, goodwill, or reputation;</li>
                                        <li>Loss of, damage to or corruption of data;</li>
                                        <li>Any indirect or consequential loss or damage;</li>
                                        <li>Orders; or</li>
                                        <li>Any Items whatsoever regardless of whether or not those Items conform to these Terms and Conditions.</li>
                                    </ul>
                                </li>
                                <li>eDropShip is explicitly not responsible to any User in case of User’s noncompliance with applicable local or international laws that may apply in the jurisdictions in which they are either based or selling Items.</li>
                                <li>eDropShip is explicitly not responsible to any User in case of User’s noncompliance with applicable local or international tax or VAT requirements that may apply in the jurisdictions in which they are either based, selling or dispatching Items.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="inde">
                        <h3 class="title">INDEMNITY</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>You acknowledge that you will be protecting, defending, indemnifying and holding eDropShip and our third-party service providers as harmless from and against any and all claims, demands, costs, expenses, losses, liabilities and damages of every type and nature (that includes legal fees without limitation) that are directly or indirectly imposed upon or incurred by eDropShip and arise from:
                                    <ul>
                                        <li>Usage of the Services by you;</li>
                                        <li>Violation of any provision of these Terms and Conditions by you; and/or</li>
                                        <li>Violation of any third-party right by you that includes any intellectual property or other proprietary right without any limitation.</li>
                                    </ul>
                                </li>
                                <li>You accept and understand that you will be protecting, defending, indemnifying and holding us harmless us from and against any and all claims that are directly or indirectly imposed upon or incurred by us and arise from your use or misuse of any third-party images and/or software. You accept and understand that the third-party images and/or software providers are third-party beneficiaries to these Terms and Conditions for purposes of enforcing only their rights under these Terms and Conditions.</li>
                                <li>This clause shall endure any termination or expiration of these Terms and Conditions or your usage of the development services.</li>

                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="data">
                        <h3 class="title">DATA PROTECTION, USER DATA AND COOKIES</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>The User(s) and eDropShip undertake to obey with the provisions of the Data Protection Act 2018, The General Data Protection Register, and any data protection legislation that is applicable in any jurisdiction related to the provisions and obligations of these Terms and Conditions.</li>
                                <li>User is completely responsible for ensuring their usage of Services is in accordance with data protection legislation. For avoiding any doubt, eDropShip is not responsible or liable for any such infringement or alleged infringement.</li>
                                <li>Any personal information will be treated in accordance with our Privacy Policy. This personal information include User’s Subscription process or their access to our Services. This information available at https://www.edropship.co.uk/</li>
                                <li>Our official Website(s) store cookies on the User’s computer. These cookies are used for the purpose of collecting information about your interaction within our Website(s) and will allow us to remember you. We utilize this information for improving and customizing your browsing experience and for analytical purposes. For finding out more about our cookies usage, please refer to our separate Cookies Policy. If you agree to these Terms and Conditions, you agree the usage of cookies on our Website(s).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="success">
                        <h3 class="title">SUCCESSORS AND ASSIGNS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>These Terms and Conditions will be bind upon and accustom to the advantage of the Users hereto and their individualheirs, successors, and assigns.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="no">
                        <h3 class="title">NO THIRD-PARTY BENEFICIARIES</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Any person or entity will not be responsible to enforce the items of these Terms and Conditions if the person or entity is not a party to them.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="governing">
                        <h3 class="title">GOVERNING LAW</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>All Terms and Conditions are governed by and construed according to the laws of England and Wales. Therefore, if any dispute is arise out of these Terms and Conditions, and then the matter will be submitted to the exclusive jurisdiction of the courts of England and Wales.</li>
                                <li>eDropShip cannot guarantee or ensure that all of its Services are suitable in every country or jurisdiction. Moreover, we cannot assure that the usage of the Services from countries or jurisdictions where its content is illegal is prohibited or not. Users are solely responsible for using our Services in agreement with their local laws, rules, and regulations.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="server">
                        <h3 class="title">SEVERABILITY</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>
                                    Each contract and provision of these Terms and Conditions are construed for all purposes to be a separate and independent contract or provision. In case if a jurisdiction court categorize any provision (or portion of a provision) of these Terms and Conditions as illegal, invalid, or otherwise unenforceable, the remaining provisions (or portions of provisions) will thus remain unaffected and will be considered to be lawful and applicable to the complete extent as allowed by law.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="miscel">
                        <h3 class="title">MISCELLANEOUS
                        </h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Waiver: If a User or eDropShip fails to or delay in exercising any right, power or privilege regarding these Terms and Conditions, then it will not be assumed to be operated as a waiver. If a User or eDropShip fails to or delay in exercising any single or partial right, power or license will not be assumed to prohibit any subsequent or further exercise of that right, power or license or the exercise of any other right, power or license.</li>
                                <li>Non-reliance: Therefore, you admit after agreeing to these Terms and Conditions, you are not dependent on any oral or written demonstration, guarantee or other assertion (except as provided or referred to in these Terms and Conditions) and you will not claim all rights and remedies which might otherwise be available to you in respect thereof.</li>
                                <li>Remedies Cumulative: The rights, powers, remedies, and privileges that are provided in these Terms and Conditions are cumulative and not exclusive of any rights, powers, remedies, and privileges provided by law, except the ones that are explicitly mentioned in this document.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="title">
                        <h3 class="title">TITLES AND HEADINGS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>All the titles and headings in this document serves the purpose of providing convenience and ease of reference only to Users and are not allowed to utilized in any way for understanding or interpreting the agreement of the Users as otherwise set forth herein.</li>

                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="contact">
                        <h3 class="title">CONTACT DETAILS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Our address is:
                                    <a href="">275 Deansgate Manchester M3 4EL</a>
                                    </li>
                                <li>Our customer service email address and telephone number are:</li>
                                <li>Email:  <a href="">hello@edropship.co.uk</a>

                                </li>
                                <li>Telephone: <a href=""> +44 7958 557597</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="seller">
                        <h3 class="title">SELLER SPECIFIC TERMS AND CONDITIONS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li> PERFORMANCE OBLIGATIONS FOR SELLERS
                                  <ul>
                                      <li>For ensuring smooth relations and helping in facilitating effective partnerships with suppliers, sellers should work on maintaining or exceeding a minimum level of service to Suppliers. All applicable Performance Obligations for Sellers are defined below.</li>
                                      <li>Obedience of sellers with the Performance Obligations for Sellers will be evaluated according to these Terms and Conditions and the Compliance Rates.</li>
                                  </ul>

                                </li>
                                <li>Compliance Rates:
                                    <ul>
                                        <li>Compliance Rates will be applicable to all Sellers who process more than one hundred (100) Orders on a recurrent ninety (90) day basis.
                                        </li>
                                        <li>Generally, the applicable Compliance Rates for Platinum and Gold Sellers are 98% or above of total Orders.
                                        </li>
                                        <li>Generally, the applicable Compliance Rates for Silver, Bronze and General Sellers are 96% or above of total Orders.
                                        </li>
                                        <li>Compliance Rates that are below 96% are considered as Below Standard and eDropShip may take Remedial Action.
                                        </li>
                                        <li>
                                            Generally, compliance Rates are applicable to all Performance Obligations. Performance Obligations are stated as being mandatory that must be adhered at all the times. eDropShip may take Remedial Action if Sellers are fail to do so.
                                        </li>
                                    </ul>
                                </li>
                                <li>Customer service:
                                    <ul>
                                        <li>
                                            Response times: Sellers are required to respond to customer service queries that are raised by Suppliers, within twenty-four (24) hours (on Business Days).
                                        </li>
                                        <li>Communications: It is a mandatory requirement for all Users to communicate to other Users only through the eDropShip Messaging System as set out in the ‘eDropShip Messaging System’ clause above.
                                        </li>
                                    </ul>
                                </li>
                                <li>Order Cancellations:
                                    <ul>
                                        <li>Sellers can cancel an Order at any time before its dispatchment by the Supplier. After dispatchment, the Sellers are required to follow the Return Item process.
                                        </li>
                                        <li>For cancelling an Order, Sellers are required to use the Cancel Order feature within their Orders screen. Sellers would be required to submit the reason for the cancelling an order.
                                        </li>
                                        <li>The Sellers must accept that we will not be capable to action a Cancellation Request if reasons are beyond our and the Supplier’s control. Therefore, in such situation, the Item will be dispatched, and then the Seller will follow the Return Item procedure for returning the Item and receiving a refund.
                                        </li>
                                        <li>It is mandatory for Suppliers to minimize their Out-of-Stock Item or Faulty Item Order Cancellations. On the other hand, Sellers acknowledge that we cannot assure that Orders will not be cancelled by the Supplier from time to time.
                                        </li>
                                    </ul>
                                </li>
                                <li>Dispute Resolution:
                                    <ul>
                                        <li>Sellers should try their best to resolve any dispute that is raised by a Supplier, within five (5) Business Days after the raise of any dispute.</li>
                                        <li>As per the Dispute Resolution clause (defined above), the Supplier may escalate the dispute to eDropShip for arbitration if the resolution is not achieved. Such escalations should be kept minimized. The applied Compliance Rate for Platinum and Gold Suppliers is 99.5% and 99% for Silver, Bronze and General Suppliers.</li>
                                        <li>Sellers are expected to receive rulings for any dispute escalation in their favor for at least 75% of cases, in case the dispute has been escalated.</li>
                                        <li> RETURN, EXCHANGE, FAULTY, DELAYED, LOST AND REPLACEMENT ITEMS</li>
                                    </ul>
                                </li>
                                <li>For having a better understanding of the commercial terms that are used in this clause, Sellers are suggested to thoroughly read the Definitions clause such as Return Items, Exchange Items, Faulty Items, Delayed Items, Lost Items, Out-of-Stock Items and Replacement Items.</li>
                                <li>Return Items: Returned Items are acceptable within thirty (30) calendar days of the Delivery Date.
                                    <ul>
                                        <li>Sellers can submit a Return Item request on the official website of eDropShip for informing the Supplier about the Return Item.</li>
                                    </ul>
                                </li>OR
                                <li>Sellers can send an email to hello@edropship.co.uk quoting their order number, their name, product code (found on the invoice) and reason for the return within 30 business days of receiving the goods. This also applies to Faulty goods that they have received. Therefore, Sellers are requested to check their full order once it is arrived and email us at hello@edropship.co.uk if they have any problems.</li>
                                <li>The Supplier is liable for responding about the acceptance or rejection of the Return Item request within five (5) Business Days after receiving a Return Item request.</li>
                                <li>If Supplier has accepted Return Item request, then the Item must be refunded within thirty (30) calendar days.
                                    <ul>
                                        <li>Sellers can ask the End Consumer to return the Item to them or they can also return the Item to the Supplier. If Sellers ask Users to return the Item to Supplier directly, Sellers are required to instruct their End Consumer for including a form of Order identification (such as invoice) for the Supplier.</li>
                                        <li>If Sellers ask Users to return the Item on their own address, then they either return the individual Items to the Supplier or aggregate all Items into batches for saving shipping costs. In any case, the Seller must resolve the whole matter within the thirty (30) calendar days as explained above.</li>
                                    </ul>
                                </li>
                                <li>Sellers are liable to ensure that Return Item is safely arrived to Supplier. We recommend Sellers and End Consumers that they use tracking shipping service along with insurance wherever and whenever applicable. If tracking number shows the Item has arrived to Supplier’s place, it means that delivery is completed. Otherwise, Sellers will be held responsible for non-delivery of the Item and any losses that can occur as a result of this.
                                    <ul>
                                        <li>The Supplier is liable for responding about acceptance or rejection of the Return Item (after the inspection of the Item) within forty-eight (48) hours on Business Days after receiving Return Item.</li>
                                        <li>In case of acceptance of Return Item, Seller will refund according to the Refunds clause.
                                        </li>
                                        <li>The decision of accepting or rejecting the Faulty Item is solely determined by Suppliers according to their business policy.</li>
                                        <li>In case of any dispute regarding the Return Item, Sellers can escalate the matter to eDropShip for arbitration as per the ‘Dispute Resolution’ clause that is defined above.

                                        </li>
                                        <li>Exchange Items: eDropShip does not provide the facility of exchanging Items. Therefore, Exchange Items are treated as Return Items.
                                            <ul>
                                                <li>For affecting an exchange, Seller will be receiving refund from Supplier upon the arrival and inspection of the Item by Supplier (as described above).</li>
                                                <li>For sourcing a Replacement Item, Seller would be required to place a new Order.</li>
                                                <li>Sellers may choose to submit the new Order prior to receiving the refund for the Return Item at their preference and at their own risk for satisfying any demands of their End Consumer or requirements of their Sales Channel.</li>
                                            </ul>
                                        </li>
                                        <li>Faulty Items: Sellers should return a Faulty Item to the Supplier within sixty (60) calendar days of the Delivery Date, regardless of whether the End Consumer has retained the Item’s original packaging and labels or not.
                                            <ul>
                                                <li>Sellers can submit a Faulty Item request on the official website of eDropShip for informing the Supplier about Faulty Item.
                                                    <ul>
                                                        <li>Suppliers are then bound to respond to this request within five (5) Business Days in either following way:
                                                            <ul>
                                                                <li>Accept the Faulty Item request and issue a refund.</li>
                                                                <li>Accept the Faulty Item request and issue a shipping label for its return.</li>
                                                                <li>Accept the Faulty Item request and dispatch a Replacement Item.</li>
                                                                <li>Reject the Faulty Item request and provide a reason for the rejection.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Sellers will have up to thirty (30) calendar days for returning the Item to the Supplier whenever and wherever applicable.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Sellers can ask the End Consumer to return the Faulty Item to them or they can also return the Item to the Supplier. If Sellers ask Users to return the Item directly to Supplier, Sellers are required to instruct their End Consumer for including a form of Order identification (such as invoice) for the Supplier.
                                    <ul>
                                        <li>If Sellers ask Users to return the Faulty Item on their own address, then they either return the individual Items to the Supplier or aggregate all Items into batches for saving shipping costs. In any case, the Seller must resolve the whole matter within the thirty (30) calendar days as explained above.</li>
                                        <li>In case of acceptance of Faulty Item, Seller will refund according to the Refunds clause.</li>
                                        <li>The decision of accepting or rejecting the Faulty Item is solely determined by Suppliers according to their business policy.</li>
                                        <li>In case of any dispute regarding the Faulty Item, Sellers can escalate the matter to eDropShip for arbitration as per the ‘Dispute Resolution’ clause that is defined above.</li>
                                        <li>Generally, a Seller wishes to maintain positive relations with their End Consumer by issuing a refund or placing a new Order for an identical Item before receiving a final resolution for the Faulty Item. Although, we aim to ensure that these Faulty Item cases are fairly and appropriately dealt, it is not assured that cases will be resolved in their favor. Therefore, these actions are undertaken at the risk of Sellers.</li>
                                        <li>If the Item is found to be Faulty after the expiration of sixty (60) calendar day period (as described above), then the Seller is responsible in this case. In such cases, Sellers are suggested to directly coordinate to the manufacturer of the Item regarding the applicable warranty by manufacturer. Sellers can take help from Suppliers for acquiring the information regarding the manufacturer of the Item; however, availability of such information to Suppliers is not always possible.</li>
                                        <li>Delayed Items: Suppliers are required to minimize the level of Delayed Item instances. However, we cannot assure the timely delivery of all Items to the End Consumer every time.</li>
                                        <li>Lost Items: Suppliers are required to minimize the level of Lost Item instances.
                                            <ul>
                                                <li>Sellers can submit a Lost Item request on the official website of eDropShip for informing the Suppliers about Lost Item.
                                                    <ul>
                                                        <li>Suppliers are then bound to respond to this request within five (5) Business Days in either following way:
                                                            <ul>
                                                                <li>Accept the Lost Item request and issue a refund.</li>
                                                                <li>Accept the Lost Item request and dispatch a Replacement Item</li>
                                                                <li>Reject the Lost Item request and provide a reason for the rejection.</li>
                                                            </ul>
                                                        </li>
                                                        <li>The decision of accepting or rejecting the Faulty Item is solely determined by Suppliers according to their business policies and principles:
                                                            <ul>
                                                                <li>If the Supplier has shipped the Item by using a tracked shipping service and the tracking number shows that the Item has arrived to Supplier’s place, it means that delivery is completed. In this case, Supplier will not be held blamed for non-delivery and holds the right to reject the Lost Item request.</li>
                                                                <li>In other situation, Sellers will be held responsible for non-delivery of the Item and will be required to accept the Lost Item request.</li>
                                                            </ul>
                                                        </li>
                                                        <li>In case of any dispute regarding the Lost Item, Sellers can escalate the matter to eDropShip for arbitration as per the ‘Dispute Resolution’ clause that is defined above.</li>
                                                        <li>Generally, a Seller wishes to maintain positive relations with their End Consumer by issuing a refund or placing a new Order for an identical Item before receiving a final resolution for the Lost Item. Although. we aim to ensure that these Lost Item cases are fairly and appropriately dealt, it is not assured that cases will be resolved in their favor. Therefore, these actions are undertaken at the risk of Sellers.</li>
                                                        <li>Replacement Items: All Suppliers are bound to dispatch all Replacement Items within forty-eight (48) hours (on Business Days) after the acceptance of Item request.</li>
                                                        <li> REFUNDS</li>
                                                    </ul>
                                                </li>
                                                <li>We try our best to ensure that refund process is completed by Suppliers within five (5) Business Days of either receipt of Item in question or agreement to issue the refund.</li>
                                                <li>Refunds amount for Return Items, Exchange Items, Lost Items or Out-of-Stock Items will be equal to the total Order Amount as invoiced, including original outbound shipping costs and VAT. Seller or End Consumer will be liable for the payment of the shipping costs that are associated with the return of the item to the Supplier (inbound).
                                                </li>
                                                <li>Refunds amount for Faulty Items will be equal to the total Order Amount as invoiced, including original outbound shipping costs, VAT as and equitable cost gained by the Seller or their End Consumer for returning the Item to the Supplier.
                                                    <ul>
                                                        <li>Equitable cost refers to the competitive market rate for an appropriate shipping service based on the item’s value, size, and weight. If Sellers surpass the reasonable cost (determined by us and Suppliers), Sellers will be responsible for the difference.</li>
                                                    </ul>
                                                </li>
                                                <li>All refund processes are handled by us and all refund amounts should be credited to the eDropShip Seller account.</li>
                                                <li>We will not be able to refund the amount directly to the Payment card. If Sellers want to receive their refund amount directly to their Payment card, they should transfer the requisite funds from their eDropShip Seller
                                                    account according to the Seller Disbursements clause.
                                                </li>
                                                <li>SUPPLIER VACATIONS AND TIME AWAY
                                                    <ul>
                                                        <li>As we identified that business needs and circumstances can quickly change, Suppliers are not obligatory for providing notice to eDropShip or Sellers before the suspension of their business activities. Therefore, Sellers are suggested to order Items from multiple Suppliers to avoid out of stock situation if any Supplier temporarily suspends business activities, such as during vacation periods.</li>
                                                    </ul>
                                                </li>

                                                <li>  SELLER DISBURSEMENTS
                                                    <ul>
                                                        <li>Seller’s refund or credit amounts will be added to the Seller’s eDropShip Seller account as a deposit balance.</li>
                                                        <li>This balance in eDropShip seller account can be wholly or partially withdrawn by Sellers at any time.</li>
                                                        <li>No fee is charged to Sellers on the withdrawal of the funds.</li>
                                                        <li>We try our best to process all disbursement requests within five (5) business days of receipt that depends on Seller’s payment card provider.</li>
                                                        <li>Refund of ONLY registered payment card is processed by eDropShip on Seller’s eDropShip account.</li>
                                                        <li>Seller disbursements can be split into multiple transactions.</li>
                                                    </ul>
                                                </li>

                                                <li> ITEM PRICE CHANGES
                                                    <ul>
                                                        <li>Sellers agree and understand that we do not hold control over the prices of the Items that are Listed by Suppliers on the official website of eDropShip.</li>
                                                        <li>Prices of Items are changed based on the business needs of the Suppliers. Therefore, Sellers are liable for ensuring that their selling price at which they are sourcing Items, are appropriate for their business needs, and can help them in covering their taxes, fees or other costs (incurred during selling Items on their Sales Channels).</li>
                                                        <li>We cannot assure that we will be informing Sellers about the increase in price of the Items that they have sourced. Therefore, we held no obligation regarding the impact (financial or any other loss) that Seller may bear because of the change in the price of the Item.
                                                        </li>
                                                        <li>It is not guaranteed by eDropShip that price changes of the Items will be automatically managed on the official website of eDropShip for Suppliers by setting defined pricing rules. We are not responsible for providing such features or tools and cannot guarantee their accessibility or precision.
                                                            <ul>
                                                                <li>These types of features are completely used at the risk of the Seller. Therefore, we are not liable of any impact (financial or any other) that occurs in this regard.</li>
                                                                <li>Sellers should consider all applicable sales taxes, currency conversion rates and fees (that includes but not related to those applied by Sales Channels and payment processing providers) for using these types of features.</li>
                                                                <li>Sellers are strongly advised for regularly monitoring any pricing rules that they set up for checking whether their performance is as predicted or not at the outset and on an ongoing basis.</li>
                                                                <li>Sellers are highly suggested for frequently observing any pricing rules that they set up for checking whether their performance is as predicted or not at the outset and on an ongoing basis.</li>
                                                                <li>Therefore, Sellers agree and undertake the risk that may rise if they fail to offer the advertised price because of an error in the prices that are offered for their Items on a Sales Channel. It will either result in the suspension or closing of their account or prevention form future usage or access to the Sales Channel.</li>
                                                                <li>SELLER SUBSCRIPTION</li>
                                                            </ul>
                                                        </li>
                                                        <li>Sellers will receive an email from eDropShip whenever they will be placing a Subscription and changing Subscription Level for confirming their new Subscription Level.
                                                        </li>
                                                        <li>Billing Date of the Subscription will be set on the basis of the date when Seller first purchased the Subscription.</li>
                                                        <li>For avoiding interruption or loss of access to our Services, we will automatically renew Seller’s Subscription on each Billing Date regardless of their request for changing their Subscription or Subscription Level.
                                                        </li>
                                                        <li>Upgrading your Subscription:
                                                            <ul>
                                                                <li>Sellers can upgrade their Subscription at any time on the official website of eDropShip.</li>
                                                                <li>During the process of upgrading request, we will be calculating the number of days remaining in Seller’s current Subscription Period and will be applying a pro-rated charge for those days based on the Subscription Fee that will be applicable to their new Subscription Level.</li>
                                                                <li>After completing the payment process, Seller’s account and access to the Services will be immediately updated for reflecting their new Subscription Level.</li>
                                                                <li>In all subsequent Billing Dates, Sellers will be billed for the full cost of their new Subscription Level and they will continue to receive the Services at that level unless and until the cancellation, upgrading, or downgrading of their Subscription Level.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Downgrading your subscription:
                                                            <ul>
                                                                <li>Sellers can submit request for downgrading their Subscription on the official website of eDropShip within the first 25 days of their current Subscription Period. After submitting request for downgrading the Subscription:
                                                                    <ul>
                                                                        <li>Sellers should complete the remaining term of their current Subscription Period;</li>
                                                                        <li>Sellers can cancel their downgrading request at any time before the downgrading takes effect;</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>Seller’s new Subscription Level, applicable Subscription Fee and corresponding access to the Services will become effective in the following Subscription Period.
                                                    <ul>
                                                            <li>If we receive any downgrading request after the first 25 days of Seller’s current Subscription Period, we will process this request as it was received during the next Subscription Period.</li>
                                                            <li>Refunds or pro-rata refunds will not be issued regarding the current Subscription Period.</li>
                                                            <li>On the next Billing Dates, Sellers will be billed for the full cost of their new Subscription Level and they will continue to receive the Services at that level unless and until the cancellation, upgrading, or downgrading of their Subscription Level.</li>
                                                            <li>Cancelling your Subscription:
                                                                <ul>
                                                                    <li>Sellers should complete the remaining term of their current Subscription Period;</li>
                                                                    <li>Sellers can cancel their cancellation request at any time before the cancellation takes effect;</li>
                                                                </ul>
                                                            </li>
                                                    </ul>
                                                </li>
                                                <li>We will not deduct Subscription Fee payments from Seller’s registered payment card after the cancellation of the Subscription;
                                                    <ul>
                                                        <li>Seller’s access to the Services will be terminated at the end of the current Subscription Period unless and until Seller places a further Subscription.</li>
                                                        <li>Seller’s account will be closed and their User data will be treated according to our Privacy Policy.
                                                            <ul>
                                                                <li>If we receive any cancellation request after the first 25 days of Seller’s current Subscription Period, we will process this request as it was received during the next Subscription Period.</li>
                                                                <li>Refunds or pro-rata refunds will not be issued regarding the current Subscription Period.</li>
                                                            </ul>
                                                        </li>
                                                        <li>After the termination of their access to our Services:
                                                            <ul>
                                                                <li>Sellers’ Orders that are in process and not yet dispatched will be cancelled and refunded to them, unless otherwise agreed by eDropShip. This matter will also be subjected to the further sub-conditions of this ‘Your Subscription’ clause;</li>
                                                                <li>Any outstanding dispute between Sellers and other Users will be completely resolved by eDropShip;</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Any amount that Sellers owe to eDropShip or other Users, (after determining by eDropShip) will be deducted from any final settlement monetary amounts that are owed by us to Sellers; and
                                                    <ul>
                                                        <li>Obligations of Sellers under these Terms and Conditions (other than regarding any clauses specifically cited as surviving a termination) will be ceased.</li>
                                                    </ul>
                                                </li>
                                                <li>Sellers accept and agree that Suppliers also hold the right of canceling their Subscription. They also agree that after the cancellation of Subscription by Suppliers and termination to access to the Services, following conditions will be applicable:
                                                    <ul>
                                                        <li>All the Item inventory that was belonged to the Supplier will be removed from the official website of eDropShip and Sellers cannot access them anymore;</li>
                                                        <li>Any outstanding dispute between Sellers and other Users will be completely resolved by eDropShip according to these terms and Conditions;</li>
                                                        <li>We will try our best for ensuring that any Orders that are still in process, but not yet dispatched, will be processed as normal by the Supplier. However, it is not guaranteed by us.</li>
                                                        <li> SELLING ITEMS ON SALES CHANNELS</li>
                                                    </ul>
                                                </li>
                                                <li>eDropShip facilitates Sellers for selling Items on various third-party Sales Channels, through our Services. Sellers are completely liable to comply with all of the terms and conditions of any such Sales Channels and any transactions that are involved in the sale of Items that Sellers can undertake on them. These may include but not limited to payment, returns, warranties, Item specification, Item safety, Item shipping, customer service, payment of applicable taxes and export/import duties, and local and international laws. eDropShip is not responsible to Sellers for the health or status of any third-party Sales Channel on which they sell Items.</li>
                                                <li>
                                                    Sales Channels can have specific requirements that govern how Sellers should register their account with them. For instance, Sellers have purchased items from the official website of eDropShip and started selling. Then it means that these items are not their personal items. However, they have sourced or purchased these items for selling or regulating their business activities. In such case, Sellers will be required for the registration of their account with appropriate, proper and applicable Sales Channel. It generally mean:
                                                    <ul>
                                                        <li>
                                                            Registering as a business or professional seller and adhering to a higher standard of account management and information provision including but not limited to providing Sellers’ business contact details, VAT number (if appropriate) and specific business policies regarding areas such as returns and refunds.
                                                            <ul>
                                                                <li>It is the sole responsibility of the Sellers for ensuring that their third-party Sales Channel activities are complied with any such requirements.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Moreover, as a business or professional seller, Seller may be required to comply with any applicable government regulations in the country in which they are selling. Specifically in the UK, business sellers must comply with the Distance Selling Regulations and the Consumer Rights Act 2015. Further information regarding consumer rights is available on the gov.uk website.
                                                            <ul>
                                                                <li>It is the sole responsibility of the Sellers for ensuring that their third-party Sales Channel activities are complied with any such requirements.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Sellers give eDropShip permission for accessing, through Application Programming Interface (API) or other appropriate means, and using data that is associated with any applicable Sales Channel accounts that Sellers link to the official website of eDropShip. Sellers also permit us for processing Orders through, including but not limited to Sellers’ products, orders, sales, shipping information, inventory, and End Consumers as necessary for facilitating their usage of the Services.</li>
                                                        <li>Sellers agree and understand that eDropShip has no control or influence over how any third-party Sales Channel is operated or managed. They also agree and understand that we have no obligation to Sellers regarding assisting them for using such Sales Channel or for resolving any disputes that may arise between Sellers and any third-party Sales Channel.</li>
                                                        <li>We may provide information and tips on what Items we believe can be sold well from time to time. We can also recommend sellers for considering sourcing. Such information is provided purely for information purposes and for the general consideration of Sellers in the context of their overall sales strategy and personal or business circumstances. Sellers agree and understand that we will not be held responsible for any such information, guidance, or tips that we provide to them.</li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>



                            </ul>
                        </div>
                    </div>




                    <div class="privacy-item" id="how">
                        <h3 class="title">How to contact eDropShip</h3>
                        <p>If you have any concerns about this Privacy Policy or the processing of personal data from this site, please contact: http://eDropShip.co.uk/ and complete the email form online.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
