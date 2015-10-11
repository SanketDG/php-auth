{% extends 'templates/default.php' %}

{% block title %}Login{% endblock %}

{% block content %}
    <form action="{{ urlFor('login.post') }}" method="post" autocomplete="off">
        <div class="">
            <label for="identifier">Username/Email</label>
            <input type="text" name="identifier" id="identifier">
        </div>

        <div class="">
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>

        <div class="">
            <input type="submit" value="Login">
        </div>
    </form>
{% endblock %}