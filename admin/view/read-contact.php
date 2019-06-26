<?php require admin_view('static/header') ?>

    <div class="content">
        <div class="box-">
            <h1>
                Contact Message (#<?= $contact['contact_id'] ?>)

            </h1>
            <a href="javascript:history.back(-1)" class="btn">Back</a>
        </div>

        <div class="box-container container-50">
            <?php if (isset($error)): ?>
                <div class="message error box-">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            <?php if (isset($contact['contact_date'])): ?>
                <div class="message success box-">
                    <?= timeConvert($contact['contact_date']) . ' gönderildi!' . '<br>' . '<strong>' . $contact['username'] . '</strong> tarafından okundu.
'; ?>
                </div>
            <?php endif; ?>
            <div class="clear" style="height: 10px;"></div>
            <div id="error"></div>
            <div id="success"></div>
            <div class="box-">
                <form action="" method="post" class="form label">
                    <ul>
                        <li>
                            <label for="">Sender</label>
                            <div style="padding-top: 12px;" class="form-content">
                                <?= $contact['contact_name'] ?>
                            </div>
                        </li>
                        <li>
                            <label for="">E-Mail</label>
                            <div style="padding-top: 12px;" class="form-content">
                                <?= $contact['contact_email'] ?>
                            </div>
                        </li>
                        <?php if ($contact['contact_phone']): ?>
                            <li>
                                <label for="">E-Mail</label>
                                <div style="padding-top: 12px;" class="form-content">
                                    <?= $contact['contact_phone'] ?>
                                </div>
                            </li>
                        <?php endif; ?>
                        <li>
                            <label for="">Subject</label>
                            <div style="padding-top: 12px;" class="form-content">
                                <?= $contact['contact_subject'] ?>
                            </div>
                        </li>
                        <li>
                            <label for="">Message</label>
                            <div style="padding-top: 12px;" class="form-content">
                                <?= nl2br($contact['message']) ?>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="box-container container-50">
            <div class="box" id="div-1">
                <h3>
                    Reply
                    <button type="button" class="toggle"><span class="fa fa-caret-up"></span></button>
                </h3>
                <div class="box-content">
                    <form action="" id="reply_contact" onsubmit="return false;" class="form">
                        <input type="hidden" name="name" value="<?= $contact['contact_name'] ?>">
                        <ul>
                            <li>
                                <input type="text" name="subject" id="input" value="RE: <?= $contact['contact_subject'] ?>" placeholder="Message Subject">
                            </li>
                            <li>
                                <input type="text" id="input" name="email" value="<?= $contact['contact_email'] ?>"
                                       placeholder="Message Subject">
                            </li>
                            <li>
                                <textarea name="message" id="" cols="30" rows="6" placeholder="Whats on your mind?"></textarea>
                            </li>
                            <li>
                                <button onclick="reply_contact('#reply_contact');" value="1" type="submit">Submit</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require admin_view('static/footer') ?>