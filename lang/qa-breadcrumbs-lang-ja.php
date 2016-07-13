<?php
    /*
        Question2Answer (c) Gideon Greenspan
        Q2A Breadcrumbs (c) Amiya Sahu (developer.amiya@outlook.com)

        http://www.question2answer.org/


        File: qa-plugin/q2a-breadcrumbs/qa-breadcrumbs-lang-default.php
        Version: See define()s at top of qa-include/qa-base.php
        Description: Widget module class for AdSense widget plugin


        This program is free software; you can redistribute it and/or
        modify it under the terms of the GNU General Public License
        as published by the Free Software Foundation; either version 2
        of the License, or (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        More about this license: http://www.question2answer.org/license.php

    */

    /* don't allow this page to be requested directly from browser */
    if ( !defined( 'QA_VERSION' ) ) {
        header( 'Location: /' );
        exit;
    }

    return array(
        "opt_yes"                     => "はい",
        "opt_no"                      => "いいえ",
        "opt_truncate"                => "パンくずのタイトルを切りつめる",
        "not_found"                   => "ページが見つかりません",
        "recent_que"                  => "最近の質問",
        "home"                        => "ホーム",
        "hot"                         => "ホットな質問",
        "most_votes"                  => "支持が多い質問",
        "most_answers"                => "回答が多い質問",
        "most_views"                  => "閲覧が多い質問",
        "no_ans"                      => "未回答の質問",
        "no_selected_ans"             => "ベストアンサーがない質問",
        "no_upvoted_ans"              => "支持された解答がない質問",
        "questions"                   => "質問",
        "unanswered"                  => "回答",
        "categories"                  => "カテゴリー",
        "tags"                        => "タグ",
        "tag"                         => "タグ",
        "users"                       => "ユーザー",
        "user"                        => "ユーザー",
        "ask"                         => "質問する",
        "save_changes"                => "変更を保存",
        "custom_css"                  => "カスタム CSS",
        "message"                     => "メッセージ",
        "top_users"                   => "ユーザー",
        "special"                     => "特権ユーザー",
        "blocked"                     => "ブロックユーザー",
        "activity"                    => "最近の記事",
        "settings_saved"              => "パンくずの設定を保存しました",
        "dont_use_link_for_last_elem" => "最後の要素にはリンクをつけない(たいていセルフリンク)",
        "searching_for"               => "検索 : ",
        "all_my_updates"              => "すべての更新",
        "my_favorites"                => "フォロー",
        "my_content"                  => "コンテンツ",
        "login"                       => "ログイン",
        "register"                    => "登録",
        "forgot"                      => "パスワードを忘れた",
        "messages"                    => "プライベートメッセージ",
        "message"                     => "メッセージ",
        "sent"                        => "送信済み",
        "inbox"                       => "受信",
        "message_for_x"               => "^ へのメッセージ : ",
        "account"                     => "アカウント情報",
        "favorites"                   => "フォロー",
        "answers"                     => "全ての回答",
        "wall"                        => "掲示板",
    );
