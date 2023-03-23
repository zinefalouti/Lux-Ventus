<?php 

/* Calling the Primary Sidebar */

?>

<!-- The sidebar and its widgets styling / It's impssible to call the main stylesheet -->

<style>

.lux-widget {
  background: #ffffff;
  border: none;
  border-radius: 20px;
  min-height: auto;
  width: 100%;
  box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.05);
  text-align: center;
  justify-content: center;
  margin-top: 10px;
  margin-bottom: 25px;
  padding: 20px;
}

.lux-widget img{
    width:124px;
    height:124px;
    border-radius: 50% !important;
    margin-bottom:1px;
}

.lux-widget h6{
    font-size:12px;
    color:#bcbcbc;
    text-transform:uppercase;
    letter-spacing:24%;
    font-weight:700;
    margin-top:10px;
}

.lux-widget h1{
    color:#262626;
    font-size:32px;
    margin-top:10px;
    font-weight:400;
}

.lux-widget h2{
    color:#262626;
    font-size:26px;
    margin-top:10px;
    font-weight:400;
}

.lux-widget h3{
    color:#262626;
    font-size:22px;
    margin-top:10px;
    font-weight:400;
}

.lux-widget h4{
    color:#262626;
    font-size:18px;
    margin-top:10px;
    font-weight:400;
}

.lux-widget h5{
    color:#262626;
    font-size:16px;
    margin-top:10px;
    font-weight:700;
}

.lux-widget p{
    color:#262626;
    font-size:14px;
    margin-top:10px;
    font-weight:400;
}

.lux-widget a{
    color: #4CE0D7;
    font-size:16px;
    font-weight:700;
    text-decoration:none;
    text-align:center;
}

.lux-widget a:hover{
    color:#4CE0D7;
    transition:0.5s ease-in-out;
}

.lux-widget a:active{
    color:#262626;
}

.lux-widget hr{
    color:#bcbcbc;
    width:50%;
    margin-top:10px;
    float:center;
    position:relative;
}

.lux-widget button{
    background:#4CE0D7;
    border:none;
    border-radius:40px;
    text-decoration:none;
    text-transform:uppercase;
    color:#262626;
    font-weight:700;
    letter-spacing:24%;
    font-size:14px;
    width:100%;
    padding:10px;
    margin-top:10px;
}

.lux-widget button:hover{
    background:#262626;
    color:#ffffff;
    transform:scale(1.03,1.03);
    transition:0.5s ease-in-out;
}

.lux-widget ul{
     text-align:center;
     margin-top:20px;
     justify-content:center;
}

.lux-widget ul li{
    list-style-type: none;
    text-align:center;
    display:flex;
    border-style:solid;
    border-width:0px 0px 1px 0px;
    border-color:#bcbcbc;
    gap:1rem;
    padding-top:15px;
    padding-bottom:15px;
}

.lux-widget ul li img{
    width:74px !important;
    border-radius:10px !important;
    height:74px !important;
    object-fit: cover;
    min-width:74px;
    max-width:74px;
    min-height:74px;
    max-height:74px;
}

.lux-widget ul li a{
    color:#262626;
    text-align:left;
    text-decoration:none;
}

.lux-widet ul li a:hover{
    color:#4CE0D7 !important;
    transition:0.5s ease-in-out;
    font-weight:700;
}

.lux-widget ul li a:active{
    color:#4CE0D7;
}

.lux-widget input {
  width: 100%;
  border-width: 2px;
  border-color:#bcbcbc;
  border-radius: 40px;
  background: #ffffff;
  color: #262626;
  padding: 10px;
  border-style:solid !important;
}

.lux-widget input ::-moz-placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #bcbcbc;
  opacity: 1;
  /* Firefox */
}
.lux-widget input ::placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #bcbcbc;
  opacity: 1;
  /* Firefox */
}
.lux-widget input :-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #bcbcbc;
}
.lux-widget input ::-ms-input-placeholder {
  /* Microsoft Edge */
  color: #bcbcbc;
}
.lux-widget input:focus {
  width: 100%;
  border-width: 4px;
  border-color: #4CE0D7;
  border-radius: 40px;
  background: #ffffff;
  color: #262626;
  padding: 15px;
  outline: none;
  transition:0.5s ease-in-out;
}
.lux-widget input:focus ::-moz-placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #bcbcbc;
  opacity: 1;
  /* Firefox */
}
.lux-widget input:focus ::placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #bcbcbc;
  opacity: 1;
  /* Firefox */
}
.lux-widget input:focus :-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #bcbcbc;
}
.lux-widget input:focus ::-ms-input-placeholder {
  /* Microsoft Edge */
  color: #bcbcbc;
}


.wp-social-link{
    padding:5px !important;
}


.cat-item{
    margin-left:-10% !important;
}

</style>

<?php if ( is_active_sidebar( 'primary' ) ) : ?>
		<?php dynamic_sidebar( 'primary' ); ?>
	<?php else : ?>
		
        <div class="lux-widget">
            <h2>No Widgets!</h2>
        </div>
        
<?php endif; ?>