
    <?php include 'header.php'; ?>
    <?php include 'mega-menu.php'; ?>
    <?php include 'breadcrumbs-and-h1.php'; ?>
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <main id="main" class="col-xs-12 col-sm-8 col-md-8" role="main">
                    <article>
                        <div class="entry-header">
                            <h1>Order documents in advance</h1>
                        </div>
                        <div class="entry-content clearfix">
                            <div class="arrow-steps clearfix"">
                                <ul>
                                    <li><span>1</span> Place order</li>
                                    <li class="current"><span>2</span> Check order</li>
                                    <li><span>3</span> Order complete</li>
                                </ul>
                            </div>
                        <h2>Check your order</h2>
                        <p>Review your order and click continue to confirm, or back to make an amend.</p>

                        <div class="emphasis-block">
                            <ul class="no-bullet">
                                <li><b>Name</b>: Joe Bloggs</li>
                                <li><b>Telephone</b>: 07898 989898</li>
                                <li><b>Date of visit</b>: 27 Jan 2018</li>
                            </ul>
                        </div>

                        <form action="step-3.php" method="POST" id="orderformconfirm" name="orderformconfirm">
                            <ol class="two-tier-list">
                                <li>Document 1<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 2<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 3<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 4<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 5<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 6<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 7<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                <li>Document 8<span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                            </ol>
                            <div class="form-row submit">
                                <a href="index.php" title="continue" class="back">&lt; Back</a>
                                <input type="submit" name="submit-advance-order" id="submit-advance-order" class="positioned" value="Complete order">
                            </div>
                        </form>

                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
