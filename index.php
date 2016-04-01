<!DOCTYPE html>
<html>
<head>
  <title>Twilio Video - Video Quickstart</title>
  <link rel="stylesheet" href="https://media.twiliocdn.com/sdk/quickstart/conversations-quickstart.min.css">
</head>
<body>
  <div id="remote-media"></div>
  <div id="controls">
    <div id="preview">
      <p class="instructions">Hello Beautiful</p>
      <div id="local-media"></div>
      <button id="button-preview">Preview My Camera</button>
    </div>
    <div id="invite-controls">
      <p class="instructions">Invite another Video Client</p>
      <input id="invite-to" type="text" placeholder="Identity to send an invite to" />
      <button id="button-invite">Send Invite</button>
    </div>
    <div id="log">
      <p><span id="log-content">Preparing to listen</span>...</p>
    </div>
  </div><!-- /controls -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="https://media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>
  <script src="https://media.twiliocdn.com/sdk/js/conversations/v0.13/twilio-conversations.min.js"></script>
  <script src="index.js"></script>
</body>
</html>
