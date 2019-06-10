<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
#myModal{display:none}
#popup_content a{text-decoration:none!important}
#popup_content{z-index:9999;position:fixed!important;max-width:700px;max-height:400px;width:100%;height:100%;border:6px solid black;box-shadow:0 0 5px rgba(0,0,0,0.2);border-radius:5px;margin:5% auto;top:10px;left:0;right:0;overflow:hidden}
#popup_background{left:0;background:#f80b0b;opacity:0.6;position:fixed;z-index:999;top:0;height:100%;width:100%}
.popup_close{font-size:20px;background:#FFF none repeat scroll 0% 0%;cursor:pointer;padding:2px 9px;text-align:center;position:absolute;color:#344;right:0}
.popup_container,.popup_container img{width:100%;height:100%;display:block}
.hidemodal{position:absolute;bottom:0;left:0;background:#fafafa;padding:5px;cursor:pointer;font-weight:700;border:1px solid #3349;font-size:12px}
.sosmed{position:absolute;bottom:0;right:0;background:#fafafa;padding:4px 3px 2px 3px;border:1px solid #3349;font-size:15px}
.sosmed .facebook,.sosmed .twitter,.sosmed .google{margin-left:5px}
.sosmed .facebook a{color:#3b5999}
.sosmed .twitter a{color:#55acee}
.sosmed .google a{color:#dd4b39}
@media screen and (max-width:500px){#popup_content{top:20%;width:90%;height:auto;box-sizing:border-box}}
</style>
<div id="myModal">
    <div id='popup_background'></div>
    <div id='popup_content'>
        <!-- <a href="javascript:void(0);" onclick="document.getElementById('myModal').style.display='none';return false;" class="popup_close" title="Close">&#215;</a> -->
        <div class='popup_container'>
            <div class='hidemodal' id='hiding'><a href="<?php echo site_url('Rapat/lihat_data'); ?>"><span title="Kembali">&#8617; Kembali</span></a></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style="text-align: center;">Tulisan</p>
            <div class="sosmed">
                <span class="facebook"><a href="https://facebook.com/Erlangga268" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>
                <span class="twitter"><a href="https://twitter.com/muherrr" title="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>
                <span class="google"><a href="https://instagram.com/erllanggaaa" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
function setCookie(e, o, i) {
    var n = new Date;
    n.setDate(n.getDate() + i);
    var a = escape(o) + (null == i ? "" : "; expires=" + n.toUTCString());
    document.cookie = e + "=" + a
}

function getCookie(e) {
    var o, i, n, a = document.cookie.split(";");
    for (o = 0; o < a.length; o++)
        if (i = a[o].substr(0, a[o].indexOf("=")), n = a[o].substr(a[o].indexOf("=") + 1), i = i.replace(/^s+|s+$/g, ""), i == e) return unescape(n)
}
var MS_Tamvan_COOKIE = "cookiemastamvans",
    hideMe = document.getElementById("myModal"),
    cookie = getCookie(MS_Tamvan_COOKIE),
    cookiemastamvans = cookie ? cookie : hideMe.style.display,
    hiding = document.getElementById("hiding");
hiding.onclick = function() {
    setCookie(MS_Tamvan_COOKIE, cookiemastamvans, 100), hideMe.style.display = "block" === cookiemastamvans ? "none" : "block", cookiemastamvans = hideMe.style.display
}, hiding.onclick();
//]]>
</script>