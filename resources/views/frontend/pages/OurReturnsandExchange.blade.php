@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"Our Returns and Exchange"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">IMPORTANT TERMS OF THIS POLICY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">ORDER CANCELLATIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#use">RETURN, EXCHANGE, FAULTY, DELAYED, LOST AND REPLACEMENT ITEMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#legal">REFUNDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#collect">IMPORTANT INSTRUCTIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#link">Returns Address</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">

                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">IMPORTANT TERMS OF THIS POLICY:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Exchange Item(s)” refers to the items that are sent back to the supplier along with the request for an alternative Item. An item can be returned back to supplier for multiple reasons i.e., the item was found Faulty, End Consumer changed his/her mind, item did not fit the need, item was not appropriate for the needs etc. The returned item must be unused and undamaged and should be returned in the original packaging.  Please note that these items do not include underwear and other personal hygiene related items. </li>
                                <li>Return Item(s)” refers to the items that are sent back to the supplier along with the request for an alternative Item. An item can be returned back to supplier for multiple reasons i.e., the item was found Faulty, End Consumer changed his/her mind, item did not fit the need, item was not appropriate for the needs etc. The returned item must be unused and undamaged and should be returned in the original packaging.  Please note that these items do not include underwear and other personal hygiene related items. </li>
                                <li>Faulty Item(s)” refers to the delivered items that are not functioning well, do not matches the description of the required item, are incorrectly dispatched, or do not match with the listed Items. Such items are proved faulty with the help of suitable photographic evidence or are sent back to the Supplier for the purpose of inspection.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">ORDER CANCELLATIONS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Sellers can cancel an Order at any time before its dispatchment by the Supplier. After dispatchment, the Sellers are required to follow the Return Item process.</li>
                                <li>For cancelling an Order, Sellers are required to use the Cancel Order feature within their Orders screen. Sellers would be required to submit the reason for the cancelling an order.</li>
                                <li>The Sellers must accept that we will not be capable to action a Cancellation Request if reasons are beyond our and the Supplier’s control. Therefore, in such situation, the Item will be dispatched, and then the Seller will follow the Return Item procedure for returning the Item and receiving a refund.</li>
                                <li>It is mandatory for Suppliers to minimize their Out-of-Stock Item or Faulty Item Order Cancellations. On the other hand, Sellers acknowledge that we cannot assure that Orders will not be cancelled by the Supplier from time to time.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="use">
                        <h3 class="title">RETURN, EXCHANGE, FAULTY, DELAYED, LOST AND REPLACEMENT ITEMS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>For having a better understanding of the commercial terms that are used in this clause, Sellers are suggested to thoroughly read the Definitions clause such as Return Items, Exchange Items, Faulty Items, Delayed Items, Lost Items, Out-of-Stock Items and Replacement Items.
                                </li>
                                <li>Return Items: Returned Items are acceptable within thirty (30) calendar days of the Delivery Date.
                                    <ul><li>Sellers can submit a Return Item request on the official website of eDropShip for informing the Supplier about the Return Item.</li></ul>
                                </li>
                                OR
                                <li>Sellers can send an email to hello@edropship.co.uk quoting their order number, their name, product code (found on the invoice) and reason for the return within 30 business days of receiving the goods. This also applies to Faulty goods that they have received. Therefore, Sellers are requested to check their full order once it arrives and email us at hello@edropship.co.uk if they have any problems.</li>
                                <li>The Supplier is liable for responding about the acceptance or rejection of the Return Item request within five (5) Business Days after receiving a Return Item request.</li>
                                <li>If Supplier has accepted Return Item request, then the Item must be refunded within thirty (30) calendar days.
                                    <ul>
                                        <li>Sellers can ask the End Consumer to return the Item to them or they can also return the Item to the Supplier. If Sellers ask Users to return the Item to Supplier directly, Sellers are required to instruct their End Consumer for including a form of Order identification (such as invoice) for the Supplier.</li>
                                        <li>If Sellers ask Users to return the Item on their own address, then they either return the individual Items to the Supplier or aggregate all Items into batches for saving shipping costs. In any case, the Seller must resolve the whole matter within the thirty (30) calendar days as explained above.</li>
                                        <li>Sellers are liable to ensure that Return Item is safely arrived to Supplier. We recommend Sellers and End Consumers that they use tracking shipping service along with insurance wherever and whenever applicable. If tracking number shows the Item has arrived to Supplier’s place, it means that delivery is completed. Otherwise, Sellers will be held responsible for non-delivery of the Item and any losses that can occur as a result of this.</li>
                                    </ul>
                                </li>
                                <li>The Supplier is liable for responding about acceptance or rejection of the Return Item (after the inspection of the Item) within forty-eight (48) hours on Business Days after receiving Return Item.
                                </li>
                                <li>In case of acceptance of Return Item, Seller will refund according to the Refunds clause.</li>
                                <li>The decision of accepting or rejecting the Faulty Item is solely determined by Suppliers according to their business policy.</li>
                                <li>In case of any dispute regarding the Return Item, Sellers can escalate the matter to eDropShip for arbitration as per the ‘Dispute Resolution’ clause that is defined above.</li>
                                <li>Exchange Items: eDropShip does not provide the facility of exchanging Items. Therefore, Exchange Items are treated as Return Items
                                    <ul>
                                        <li>For affecting an exchange, Seller will be receiving refund from Supplier upon the arrival and inspection of the Item by Supplier (as described above).</li>
                                        <li>For sourcing a Replacement Item, Seller would be required to place a new Order.</li>
                                        <li>Sellers may choose to submit the new Order prior to receiving the refund for the Return Item at their preference and at their own risk for satisfying any demands of their End Consumer or requirements of their Sales Channel.</li>
                                    </ul>
                                </li>
                                <li>Faulty Items: Sellers should return a Faulty Item to the Supplier within sixty (60) calendar days of the Delivery Date, regardless of whether the End Consumer has retained the Item’s original packaging and labels or not.
                                    <ul>
                                        <li>Sellers can submit a Faulty Item request on the official website of eDropShip for informing the Supplier about Faulty Item
                                            <ul>
                                                <li>Suppliers are then bound to respond to this request within five (5) Business Days in either following way:
                                                    <ul>
                                                        <li>Accept the Faulty Item request and issue a refund.
                                                        </li>
                                                        <li>Accept the Faulty Item request and issue a shipping label for its return.</li>
                                                        <li>Accept the Faulty Item request and dispatch a Replacement Item.</li>
                                                        <li>Reject the Faulty Item request and provide a reason for the rejection.</li>
                                                    </ul>
                                                </li>
                                                <li>Sellers will have up to thirty (30) calendar days for returning the Item to the Supplier whenever and wherever applicable.
                                                    <ul><li>Sellers can ask the End Consumer to return the Faulty Item to them or they can also return the Item to the Supplier. If Sellers ask Users to return the Item directly to Supplier, Sellers are required to instruct their End Consumer for including a form of Order identification (such as invoice) for the Supplier.</li></ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>If Sellers ask Users to return the Faulty Item on their own address, then they either return the individual Items to the Supplier or aggregate all Items into batches for saving shipping costs. In any case, the Seller must resolve the whole matter within the thirty (30) calendar days as explained above.</li>
                                <li>Sellers are liable to ensure that Faulty Item is safely arrived to Supplier. We recommend Sellers and End Consumers that they use tracking shipping service along with insurance wherever and whenever applicable. If tracking number shows the Item has arrived to Supplier’s place, it means that delivery is completed. Otherwise, Sellers will be held responsible for non-delivery of the Item and any losses that can occur as a result of this.</li>
                                <li>The Supplier is liable for responding about acceptance or rejection of the Faulty Item (after the inspection of the Item) within forty-eight (48) hours on Business Days after receiving Faulty Item.</li>
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
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="legal">
                        <h3 class="title">REFUNDS</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>We try our best to ensure that refund process is completed by Suppliers within five (5) Business Days of either receipt of Item in question or agreement to issue the refund.</li>
                                <li>Refunds amount for Return Items, Exchange Items, Lost Items or Out-of-Stock Items will be equal to the total Order Amount as invoiced, including original outbound shipping costs and VAT. Seller or End Consumer will be liable for the payment of the shipping costs that are associated with the return of the item to the Supplier (inbound).</li>
                                <li>Refunds amount for Faulty Items will be equal to the total Order Amount as invoiced, including original outbound shipping costs, VAT as and equitable cost gained by the Seller or their End Consumer for returning the Item to the Supplier.
                                    <ul>
                                        <li>Equitable cost refers to the competitive market rate for an appropriate shipping service based on the item’s value, size, and weight. If Sellers surpass the reasonable cost (determined by us and Suppliers), Sellers will be responsible for the difference.</li>
                                    </ul>
                                </li>
                                <li>All refund processes are handled by us and all refund amounts should be credited to the eDropShip Seller account.</li>
                                <li>We will not be able to refund the amount directly to the Payment card. If Sellers want to receive their refund amount directly to their Payment card, they should transfer the requisite funds from their eDropShip Seller account according to the Seller Disbursements clause.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="collect">
                        <h3 class="title">IMPORTANT INSTRUCTIONS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>All items should be returned in their original condition and packaging. We will not be liable for any loss or damage incurred while returns are held by third parties.</li>
                                <li>For Sale items, we will not accept any returns due to the nature of these styles that are being reduced for the seasonal end of season sale. All Prices are subjected to change at any time.</li>
                                <li>If you have received a pack with the incorrect ratio, please note you will be required to return the whole pack to us.</li>
                                <li>Please note customers must arrange the return of the item by their own courier and at their own cost.</li>
                                <li>Please provide a tracking number when inquiring on the status of your return.</li>
                                <li>Please provide a tracking number when inquiring on the status of your return.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="personal">
                        <h3 class="title">Returns Address:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Anarkaly Limited</li>
                                <li>Suite 209, 275 Deansgate</li>
                                <li>Manchester, M3 4EL</li>
                            </ul>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
