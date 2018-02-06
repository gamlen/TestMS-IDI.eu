
 <h1 class="text-center">GuestBook</h1>
    <hr/>
    <form method="POST" id="forms">

        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" placeholder="Type your name here..." name="name" type="text" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" placeholder="E-mail..." name="email" type="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="email">WebSite</label>
            <input class="form-control" placeholder="Your Website here..." name="website" type="url" id="website">
        </div>

        <div class="form-group">
            <label for="text">Message</label>
            <textarea class="form-control" rows="5" placeholder="Type your message here..." name="text" cols="50"
                      id="text" required></textarea>
        </div>
        <div class="g-recaptcha" id="captcha" data-sitekey="6LcxoEQUAAAAAAQd8F348L1Yv8a50JRq6ng2Z9Zp"></div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Add" id = "submit">
        </div>
    </form>
