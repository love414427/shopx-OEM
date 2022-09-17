$(function()
{
    // 发送验证码
    var intervalid = null;
    $('.verify-submit').on('click', function()
    {
        var $this = $(this);
        var time_count = parseInt($this.data('time')) || 60;
        $this.button('loading');
        $.ajax({
            url: $this.data('url'),
            type: 'post',
            dataType: "json",
            timeout: 10000,
            data: GetFormVal('form.form-validation', true),
            success: function(result)
            {
                $.AMUI.progress.done();
                if(result.code == 0)
                {
                    $('input[name="sms_id"]').val(result.data.sms_id);
                    if(result.data.is_pwd == 1)
                    {
                        $('.pwd-container').removeClass('am-hide').find('input').val('');
                    } else {
                        $('.pwd-container').addClass('am-hide').find('input').val('');
                    }
                    Prompt(result.msg, 'success');

                    // 倒计时
                    intervalid = setInterval(function()
                    {
                        if(time_count == 0)
                        {
                            $this.button('reset');
                            $this.text($this.data('text'));
                            clearInterval(intervalid);
                        } else {
                            var send_msg = $this.data('send-text').replace(/{time}/, time_count--);
                            $this.text(send_msg);
                        }
                    }, 1000);
                } else {
                    $this.button('reset');
                    Prompt(result.msg);
                }
            },
            error: function(xhr, type)
            {
                $this.button('reset');
                $.AMUI.progress.done();
                Prompt(HtmlToString(xhr.responseText) || '异常错误', null, 30);
            }
        });
    });
});