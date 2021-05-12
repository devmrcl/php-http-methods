<?php

namespace Mrcl\Utils\InternetStandards;

interface HttpMethod
{
    /**
     * ACL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3744#section-8.1 RFC3744
     */
    public const ACL = 'ACL';

    /**
     * BASELINE-CONTROL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-12.6 RFC3253
     */
    public const BASELINE_CONTROL = 'BASELINE-CONTROL';

    /**
     * BIND
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5842#section-4 RFC5842
     */
    public const BIND = 'BIND';

    /**
     * CHECKIN
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-4.4 RFC3253
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-9.4 RFC3253
     */
    public const CHECKIN = 'CHECKIN';

    /**
     * CHECKOUT
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-4.3 RFC3253
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-8.8 RFC3253
     */
    public const CHECKOUT = 'CHECKOUT';

    /**
     * CONNECT
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.6 RFC7231
     */
    public const CONNECT = 'CONNECT';

    /**
     * COPY
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.8 RFC4918
     */
    public const COPY = 'COPY';

    /**
     * DELETE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.5 RFC7231
     */
    public const DELETE = 'DELETE';

    /**
     * GET
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.1 RFC7231
     */
    public const GET = 'GET';

    /**
     * HEAD
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.2 RFC7231
     */
    public const HEAD = 'HEAD';

    /**
     * LABEL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-8.2 RFC3253
     */
    public const LABEL = 'LABEL';

    /**
     * LINK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2068#section-19.6.1.2 RFC2068
     */
    public const LINK = 'LINK';

    /**
     * LOCK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.10 RFC4918
     */
    public const LOCK = 'LOCK';

    /**
     * MERGE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-11.2 RFC3253
     */
    public const MERGE = 'MERGE';

    /**
     * MKACTIVITY
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-13.5 RFC3253
     */
    public const MKACTIVITY = 'MKACTIVITY';

    /**
     * MKCALENDAR
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4791#section-5.3.1 RFC4791
     * @link https://datatracker.ietf.org/doc/html/rfc8144#section-2.3 RFC8144
     */
    public const MKCALENDAR = 'MKCALENDAR';

    /**
     * MKCOL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.3 RFC4918
     * @link https://datatracker.ietf.org/doc/html/rfc5689#section-3 RFC5689
     * @link https://datatracker.ietf.org/doc/html/rfc8144#section-2.3 RFC8144
     */
    public const MKCOL = 'MKCOL';

    /**
     * MKREDIRECTREF
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4437#section-6 RFC4437
     */
    public const MKREDIRECTREF = 'MKREDIRECTREF';

    /**
     * MKWORKSPACE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-6.3 RFC3253
     */
    public const MKWORKSPACE = 'MKWORKSPACE';

    /**
     * MOVE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.9 RFC4918
     */
    public const MOVE = 'MOVE';

    /**
     * OPTIONS
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.7 RFC7231
     */
    public const OPTIONS = 'OPTIONS';

    /**
     * ORDERPATCH
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3648#section-7 RFC3648
     */
    public const ORDERPATCH = 'ORDERPATCH';

    /**
     * PATCH
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5789#section-2 RFC5789
     */
    public const PATCH = 'PATCH';

    /**
     * POST
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.3 RFC7231
     */
    public const POST = 'POST';

    /**
     * PRI
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7540#section-3.5 RFC7540
     */
    public const PRI = 'PRI';

    /**
     * PROPFIND
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.1 RFC4918
     * @link https://datatracker.ietf.org/doc/html/rfc8144#section-2.1 RFC8144
     */
    public const PROPFIND = 'PROPFIND';

    /**
     * PROPPATCH
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.2 RFC4918
     * @link https://datatracker.ietf.org/doc/html/rfc8144#section-2.2 RFC8144
     */
    public const PROPPATCH = 'PROPPATCH';

    /**
     * PUT
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.4 RFC7231
     */
    public const PUT = 'PUT';

    /**
     * REBIND
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5842#section-6 RFC5842
     */
    public const REBIND = 'REBIND';

    /**
     * REPORT
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-3.6 RFC3253
     * @link https://datatracker.ietf.org/doc/html/rfc8144#section-2.1 RFC8144
     */
    public const REPORT = 'REPORT';

    /**
     * SEARCH
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5323#section-2 RFC5323
     */
    public const SEARCH = 'SEARCH';

    /**
     * TRACE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.8 RFC7231
     */
    public const TRACE = 'TRACE';

    /**
     * UNBIND
     *
     * @link https://datatracker.ietf.org/doc/html/rfc5842#section-5 RFC5842
     */
    public const UNBIND = 'UNBIND';

    /**
     * UNCHECKOUT
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-4.5 RFC3253
     */
    public const UNCHECKOUT = 'UNCHECKOUT';

    /**
     * UNLINK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2068#section-19.6.1.3 RFC2068
     */
    public const UNLINK = 'UNLINK';

    /**
     * UNLOCK
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4918#section-9.11 RFC4918
     */
    public const UNLOCK = 'UNLOCK';

    /**
     * UPDATE
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-7.1 RFC3253
     */
    public const UPDATE = 'UPDATE';

    /**
     * UPDATEREDIRECTREF
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4437#section-7 RFC4437
     */
    public const UPDATEREDIRECTREF = 'UPDATEREDIRECTREF';

    /**
     * VERSION-CONTROL
     *
     * @link https://datatracker.ietf.org/doc/html/rfc3253#section-3.5 RFC3253
     */
    public const VERSION_CONTROL = 'VERSION-CONTROL';
}
