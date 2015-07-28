{% extends "FOSUserBundle::layout.html.twig" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action="{{ path("fos_user_security_check") }}" method="post">
    
    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />
   <div class="form-group has-feedback">
    <input type="text" id="username" class="form-control" name="_username"  value="{{ last_username }}" required="required" />
     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">  
    <input type="password" id="password" class="form-control" placeholder="Password" name="_password" required="required" />
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
    <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <input type="checkbox" id="remember_me" name="_remember_me" value="on" />
                <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>

              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-block btn-flat"/>
            </div><!-- /.col -->
          </div>
  
</form>
{% endblock fos_user_content %}
