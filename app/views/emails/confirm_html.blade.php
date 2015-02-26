<html>
  <body>
    <script type="application/ld+json">
    {
      "@context":"http://schema.org",
      "@type":"EmailMessage",
      "description":"Confirm your Invoice Ninja account",
      "action":
      {
        "@type":"ConfirmAction",
        "name":"Confirm Account",
        "handler": {
          "@type": "HttpActionHandler",
          "url": "{{{ URL::to("user/confirm/{$user->confirmation_code}") }}}"
        }    
      }
    }
    </script>

    <h1>{{ trans('texts.confirmation_header') }}</h1>

    <p>
      {{ $invitationMessage . trans('texts.confirmation_message') }}
      <a href='{{{ URL::to("user/confirm/{$user->confirmation_code}") }}}'>
          {{{ URL::to("user/confirm/{$user->confirmation_code}") }}}
      </a>
    <p/>

    {{ trans('texts.email_signature') }}<br/>
    {{ trans('texts.email_from') }}

  </body>
</html>