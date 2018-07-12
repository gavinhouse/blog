<?php

class postEntry{


    public function refinePosts($posts){
        $refinedPosts = [];
        foreach($posts as $post){
            $tempArray = [
                'author' => $post['authorName'],
                'title' => $post['title'],
                'content' => $post['content'],
                'date' => $post['date'],
                'imageName' => $post['imageName']
            ];
            array_unshift($refinedPosts,$tempArray);
        }
        return $refinedPosts;
    }
    public function truncate($string,$length=100,$append="&hellip;") {
        $string = trim($string);

        if(strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }


}