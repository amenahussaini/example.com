                                                                                                    # Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('702951f3ddbbd69df2b1efea8a97b708-060550c6-b46302b0');
$domain = "sandbox2f61a6969f8941e9a45a6840910e026a.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => 'Mailgun Sandbox <postmaster@sandbox2f61a6969f8941e9a45a6840910e026a.mailgun.org>',
                'to'      => 'Amena Hussaini <amena298@gmail.com>',
                'subject' => 'Hello Amena Hussaini',
                'text'    => 'Congratulations Amena Hussaini, you just sent an email with Mailgun!  You are truly awesome!'));
# You can see a record of this email in your logs: https://app.mailgun.com/app/logs

# You can send up to 300 emails/day from this sandbox server.
# Next, you should add your own domain so you can send 10,000 emails/month for free.

var_dump($result);
