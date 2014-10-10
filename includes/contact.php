<div id="contact"><h1><b>Contact<span id="small"> * all fields required</span></b></h1>
    <div id="formcon">
        <form id="form" method="post" action="php/mailform.php">
            <label for="naam">Name *</label>
            <input type="text" name="naam" id="naam" required="Name" placeholder="Grizzly Bear"/>    <br /><br />
            <label for="adres">Adress *</label>
            <input type="text" name="adres" id="adres" placeholder="Cave 1, 1234 The Woods" required="Adress"/><br /><br />
            <label for="email">E-mail *</label>
            <input type="email" placeholder="grizzly@bear.com" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/><br /><br />
            <label id="bericht" for="message">Message *</label><br />
            <textarea name="message" id="message" rows="10" cols="60" required="Message"></textarea><br />
            <input type="submit" name="send" value="Send" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
            <input type="reset" name="clear" value="Clear" class="clear-button">
        </form>
    </div>
</div>
