@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li><a href="index">Home</a></li>
                            <li>FAQ</li>
                        </ul>
                        <h1>Frequently asked Questions</h1>
                        <p>Check here for more information about Taxs and Withholding Taxes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->



    <!-- Page Conent -->
    <main class="page-content">

        <!-- Accordion -->


        <div class="container my-5">
            <h2 class="text-center mb-4">New WHT Regulations and Small Businesses - Frequently Asked Questions (FAQs)</h2>
            <div class="accordion" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"
                                aria-expanded="true" aria-controls="collapse1">
                                Q1. How will the new WHT Regulations affect small businesses?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#faqAccordion">
                        <div class="card-body">
                            Small businesses will enjoy exemptions from withholding tax under the new rules. This will
                            reduce their tax burden, lower their cost of working capital, improve their cash flows, and
                            overall ease of doing business.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Q2. What does the exemption entail in practical terms?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqAccordion">
                        <div class="card-body">
                            It means that small businesses are no longer required to deduct tax on payments to their
                            suppliers. However, to curb tax evasion, they must deduct tax if the supplier has no Tax
                            Identification Number (TIN) or where the total payment to a supplier in one month exceeds N2
                            million except for transactions which are specifically exempted as listed in the Regulations.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Q3. How will the deduction be reported to the tax authority if the supplier has no TIN?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faqAccordion">
                        <div class="card-body">
                            Where a supplier has no TIN, the NIN in the case of an individual or RC number in the case of a
                            company should be stated. The rate of withholding tax on such payment is doubled. This doubled
                            rate is not applicable to investment income such as dividend, interest, and rent.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card">
                    <div class="card-header" id="heading4">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Q4. What is the definition of a small business?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faqAccordion">
                        <div class="card-body">
                            A small business is any company or an enterprise with an annual turnover not exceeding N25
                            million. There is a draft proposal to increase this threshold to N50 million subject to the law
                            being enacted.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="card">
                    <div class="card-header" id="heading5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Q5. Where a deduction of tax is applicable, can the supplier insist that any deductions be
                                grossed up, thereby increasing the cost of the small business?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faqAccordion">
                        <div class="card-body">
                            No. The new WHT Regulations prohibit the treatment of tax deduction at source as an additional
                            cost of the recipient.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="card">
                    <div class="card-header" id="heading6">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Q6. How about withholding tax on payment of an invoice due to a small business?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faqAccordion">
                        <div class="card-body">
                            Withholding tax is not applicable on payments due to a small business in the following
                            circumstances:
                            <ul>
                                <li>a small company with annual turnover not exceeding N25 million</li>
                                <li>all businesses in respect of manufacturing, agriculture, and other production activities
                                    regardless of their turnover</li>
                                <li>sales in cash or instant electronic payments</li>
                                <li>other transactions stated as exempt under the new regulations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="card">
                    <div class="card-header" id="heading7">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Q7. Does a small business need to file monthly withholding tax returns, whether it has
                                withholding tax to remit or not?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faqAccordion">
                        <div class="card-body">
                            No. Businesses, including SMEs, are only required to file returns in any month when they have
                            deducted taxes at source in the previous month. Such returns should contain the information
                            prescribed in the schedule to the WHT Regulations.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="card">
                    <div class="card-header" id="heading8">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Q8. What happens if a small business fails to deduct tax where applicable?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faqAccordion">
                        <div class="card-body">
                            An administrative penalty will be charged for failure to deduct tax where applicable. If you
                            deduct tax and fail to remit it by the due date being the 21st (for remittances to FIRS) or 30th
                            (for remittances to a state Internal Revenue Service) of the following month, you will be liable
                            to pay the amount not remitted with penalty and interest.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 9 -->
                <div class="card">
                    <div class="card-header" id="heading9">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Q9. When does the new Withholding Tax Regulations take effect?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#faqAccordion">
                        <div class="card-body">
                            The new rules take effect from 1st of January 2025. However, an early adoption may be permitted
                            subject to guidelines issued by the relevant tax authority.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 10 -->
                <div class="card">
                    <div class="card-header" id="heading10">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Q10. How can we learn more about the new WHT Regulations and other ongoing fiscal and tax
                                reforms?
                            </button>
                        </h5>
                    </div>
                    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faqAccordion">
                        <div class="card-body">
                            You can contact the relevant tax authority or consult the official documentation and updates
                            provided by the government on fiscal and tax reforms.
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!--// BLogs grid -->

        <!-- Call To Action Area -->
        <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="calltoaction text-center">
                            <h3>NEED ANY HELP AT<span class="color--theme"> YOUR TAX SOLUTION?</span></h3>
                            <p>we're here to support you every step of the way. Whether you have questions about tax planning,
                            need assistance with filing, or require expert advice on complex tax issues, our dedicated team is ready to help</p>
                            <h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--// Call To Action Area -->

    </main><!-- //Page Conent -->
@endsection
