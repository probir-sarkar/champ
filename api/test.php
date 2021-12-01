<?php 
function GetPost($accessToken)
{
    $url = 'https://api.instagram.com/v1/users/self/media/recent?access_token=' . $accessToken;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = json_decode(curl_exec($ch), true);

    curl_close($ch);

    return $data;
}
$result = GetPost('IGQVJWalhEVVF1V2hKajc3NnRwQmhkZA3E4cmdiODRGQVB0N256SjVNRGdoOENSR19ZAQ3lTNFlIaFBrYlpOd2ZAmRjhHU0k1RDNBMXJ1ektXVFRDQ2RmZADBaVG5Qc28zckZAoZAGI1Ym94bkhuRHZA6ZA0lOTQZDZD');
?>
<div class="wraper">
            <div class="header">
                <div class="profile">
                    <img src="<?php echo $result['data'][0]['user']['profile_picture']; ?>">

                </div>
                <div class="userDetail">
                    <h3><?php echo $result['data'][0]['user']['username']; ?></h3>
                </div>
            </div>
            <div class="post">
                <?php foreach ($result['data'] as $row) { ?>
                    <div class="post-img">
                        <img src="<?php echo $row['images']['standard_resolution']['url']; ?>">
                        <div class="caption">
                            <label>Comments(<?php echo $row['comments']['count'] ?>) - Likes(<?php echo $row['likes']['count'] ?>)</label>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>