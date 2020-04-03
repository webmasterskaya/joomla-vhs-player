create table if not exists `#__vhs_videos`
(
    `id`           INT(11)          not null auto_increment,
    `state`        TINYINT(3)       not null default 0,
    `playlist`     INT(11)          not null default 0,
    `created_by`   INT(10) unsigned not null default '0',
    `created`      DATETIME         not null default '0000-00-00 00:00:00',
    `publish_up`   DATETIME         not null default '0000-00-00 00:00:00',
    `publish_down` DATETIME         not null default '0000-00-00 00:00:00',
    `params`       TEXT             not null,
    `images`       TEXT             not null collate 'utf8mb4_unicode_ci',
    `video`        TEXT             not null collate 'utf8mb4_unicode_ci',
    `ordering`     INT(11)          not null default 0,
    `hits`         INT(10)          not null default 0,
    primary key `id` (`id`),
    key `idx_createdby` (`created_by`),
    key `idx_state` (`state`),
    key `idx_catid` (`playlist`),
    key `idx_ordering` (`ordering`),
    key `idx_hits` (`hits`)
) engine = InnoDB
  default charset = utf8mb4
  default collate = utf8mb4_unicode_ci
  auto_increment = 0;

create table if not exists `#__vhs_translate_videos`
(
    `id`        INT(11)                                                not null default 0,
    `language`  CHAR(7)                                                not null default '',
    `title`     VARCHAR(255)                                           not null default '',
    `alias`     VARCHAR(400) character set utf8mb4 collate utf8mb4_bin not null default '',
    `introtext` TEXT                                                   not null,
    `fulltext`  MEDIUMTEXT                                             not null,
    `metadata`  TEXT                                                   not null,
    primary key (`id`, `language`),
    key `idx_alias` (`alias`(191))
) engine = InnoDB
  default charset = utf8mb4
  default collate = utf8mb4_unicode_ci;

create table if not exists `#__vhs_playlists`
(
    `id`        INT(11)      not null auto_increment,
    `parent_id` INT(11)      not null default 0,
    `lft`       INT(11)      not null default 0,
    `rgt`       INT(11)      not null default 0,
    `level`     INT(10)      not null default 0,
    `path`      VARCHAR(400) not null default '',
    `state`     TINYINT(3)   not null default 0,
    `params`    TEXT         not null,
    primary key `id` (`id`),
    key `idx_left_right` (`lft`, `rgt`),
    key `idx_path` (`path`(100)),
    key `idx_state` (`state`)
) engine = InnoDB
  default charset = utf8mb4
  default collate = utf8mb4_unicode_ci
  auto_increment = 0;

create table if not exists `#__vhs_translate_playlists`
(
    `id`          INT(11)                                                not null default 0,
    `language`    CHAR(7)                                                not null default '',
    `title`       VARCHAR(255)                                           not null default '',
    `alias`       VARCHAR(400) character set utf8mb4 collate utf8mb4_bin not null default '',
    `description` MEDIUMTEXT                                             not null,
    `metadata`    TEXT                                                   not null,
    primary key (`id`, `language`),
    key `idx_alias` (`alias`(191))
) engine = InnoDB
  default charset = utf8mb4
  default collate = utf8mb4_unicode_ci;