<?php

include_once "SocialMedia.php";
include_once "PostMediaManager.php";

class Instagram implements SocialMedia, PostMediaManager
{
    public function chat(): void
    {
        echo "Saya Mengobrol di Instagram...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Saya Mengirim foto dan video di Instagram...\n";
    }

    public function publishPost(): void
    {
        echo "Saya Mempublikasikan postingan di Instagram...\n";
    }
}
