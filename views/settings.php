<div style="text-align: center; height: 100%">
    <div style="margin: 50px 50px 50px 50px; border: 1px solid black; height: 100%">
        <div style="margin: 10px 10px 10px 10px; text-align:left; height: 100%">
            <table style="width: 100%; height: 100%">
                <tr>
                    <td style="border: 1px solid black; width: 15%; height:3%; text-align:center"><p class="ace"><?php if($_GET['type']!="none"){echo strtoupper($_GET['type']);} ?> SETTINGS</p></td>
                    <td rowspan="4" style="border: 1px solid black; height: 100%">
<?php if($_GET['type']=="general"){?>
    <div>
        <form method="post">
        <table style="width: 100%; text-align:center">
            <tr style="border: 1px solid black;">
                <td style="border: 1px solid black;width: 15%;">
                    Dark mode
                </td>
                <td style="border: 1px solid black;">
                    <input type="checkbox" name="dm">
                </td>
            </tr>
        </table>
        <input type="submit" value="Apply">
        </form>
    </div>
<?php } else if($_GET['type']=="profile"){?>
    <div>
        PROFILE SETTINGS OPTIONS HERE
    </div>
<?php } else if($_GET['type']=="posts"){?>
    <div>
        POSTS SETTINGS OPTIONS HERE
    </div>
<?php } ?>


                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; width: 15%;"><a href="settings.php?type=general" class="navitem2 ace ddlink">General Settings</a></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; width: 15%;"><a href="settings.php?type=profile" class="navitem2 ace ddlink">Profile Settings</a></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; width: 15%;"><a href="settings.php?type=posts" class="navitem2 ace ddlink">Posts Settings</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>