<!--注册接口-->
{{--<form action="http://x16311542j.51mypc.cn/home/register" method="post" enctype="multipart/form-data">
    <input name="captcha" type="text" value="123456">
    <input name="mobile" type="text" value="15588887777">
    <input name="password" type="text" value="123456">
    <input name="invitation_code" type="text" value="">
    <button type="submit">提交</button>
</form>--}}
<!--修改个人资料-->
{{--<form action="/api/personal-information" method="post" enctype="multipart/form-data">
    <input name="nickname" type="text" value="fannan">
    <input name="client_id" type="hidden" value="2">
    <input name="access_token" type="hidden" value="$2y$10$udAINsxVcPwM9T7v3F4i0uljtm2utghMgBRUkezpbpbIGlGjf7Cj2">
    <input name="image" type="file">
    <button type="submit">提交</button>
</form>--}}

<!--修改密码-->
{{--<form action="/home/change-password" method="post" enctype="multipart/form-data">
    <input name="current_password" type="text" value="123456">
    <input name="new_password" type="text" value="111111">
    <input name="re_password" type="text" value="111111">
    <input name="client_id" type="hidden" value="2">
    <input name="access_token" type="hidden" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--实名认证-->
<form action="/api/verified" method="post" enctype="multipart/form-data">
    <input name="name" type="hidden" value="樊楠">
    <input name="id_card" type="hidden" value="122222222222">
    <input name="client_id" type="hidden" value="2">
    <input name="access_token" type="hidden" value="$2y$10$udAINsxVcPwM9T7v3F4i0uljtm2utghMgBRUkezpbpbIGlGjf7Cj2">
    <input name="card_positive_pic" type="file">
    <input name="card_negative_pic" type="file">
    <button type="submit">提交</button>
</form>

<!--会员等级-->
{{--<form action="/home/grade" method="post" enctype="multipart/form-data">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--积分记录-->
{{--<form action="/home/integral" method="post" enctype="multipart/form-data">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--金币记录-->
{{--
<form action="/home/gold" method="post" enctype="multipart/form-data">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--提现记录-->
{{--
<form action="/home/withdraw-log" method="post" enctype="multipart/form-data">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--提现-->
{{--
<form action="/home/withdraw" method="post" enctype="multipart/form-data">
    <input name="withdraw_amount" type="text" value="10">
    <input name="withdraw_bank" type="text" value="建设银行">
    <input name="withdraw_name" type="text" value="樊楠">
    <input name="withdraw_card" type="text" value="142322333222223332">
    <input name="withdraw_bank_card" type="text" value="65544444333343354">
    <input name="withdraw_mobile" type="text" value="15002983802">
    <input name="client_id" type="hidden" value="2">
    <input name="access_token" type="hidden" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--申请贷款-->
{{--
<form action="/home/loan" method="post" enctype="multipart/form-data">
    <input name="loan_amount" type="text" value="10000">
    <input name="loan_term_date" type="text" value="3">
    <input name="client_id" type="hidden" value="2">
    <input name="access_token" type="hidden" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--贷款记录-->
{{--<form action="/home/loan-log" method="post" enctype="multipart/form-data">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}

<!--贷款详情-->
{{--<form action="/home/loan-log" method="post" enctype="multipart/form-data">
    <input name="loan_id" type="text" value="1">
    <input name="client_id" type="text" value="2">
    <input name="access_token" type="text" value="$2y$10$R9K/iJ3l5/1OghGKGK9psOLsbIrHJYrZxVQqOyni34j7g/N5KlBhi">
    <button type="submit">提交</button>
</form>--}}
