# Apache Log Success Rates

Given an Apache-style web server log, calculate and report the success rate per endpoint per minute.

The `"endpoint"` is the path component of the URI. Example: `/1.1/users/show.json`
The `"success rate"` is the ratio of non-500-level response codes to total requests for a given endpoint, expressed as a percentage with two digits after the decimal.

Note that the results should be sorted first by minute, and then lexicographically by endpoint. Times should be output in GMT.

Your solution should work for any log file that uses the same formatting as the example provided below, including very large files.

## Sample Input:
```
10.10.10.10 - - [27/Sep/2016:05:22:00 +0000] "GET /1.1/friendships/list.json?user_id=123 HTTP/1.1" 500 563 19 "Twitter-iPhone/6.63 iOS/10.0.2 (Apple;iPhone7,2;;;;;1)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:05:22:08 +0000] "GET /1.1/friendships/list.json?user_id=123 HTTP/1.1" 200 563 19 "Twitter-iPhone/6.63 iOS/10.0.2 (Apple;iPhone7,2;;;;;1)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:05:22:31 +0000] "GET /1.1/friendships/list.json HTTP/1.1" 200 563 19 "Twitter-iPhone/6.63 iOS/10.0.2 (Apple;iPhone7,2;;;;;1)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:05:22:59 +0000] "GET /1.1/friendships/list.json HTTP/1.1" 200 94 6 "Twitter-iPhone/6.63 iOS/10.0.1 (Apple;iPhone7,2;;;;;1)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:05:23:01 +0000] "GET /1.1/users/show.json?include_entities=1&user_id=321 HTTP/1.1" 200 4160 51 "Twitter-iPhone/6.63 iOS/9.3.5 (Apple;iPhone7,2;;;;;0)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:22:45:33 +0000] "GET /1.1/friendships/list.json?user_id=234 HTTP/1.1" 200 563 19 "Twitter-iPhone/6.63 iOS/10.0.2 (Apple;iPhone7,2;;;;;1)" 177.177.177.177
10.10.10.10 - - [27/Sep/2016:22:45:51 +0000] "POST /1.1/friendships/create.json HTTP/1.1" 200 4193 120 "Twitter-iPhone/6.62.1 iOS/9.3.5 (Apple;iPhone7,2;;;;;0)" 177.177.177.177
```

## Sample Output:
```
2016-09-27T05:22 /1.1/friendships/list.json 75.00
2016-09-27T05:23 /1.1/users/show.json 100.00
2016-09-27T22:45 /1.1/friendships/create.json 100.00
2016-09-27T22:45 /1.1/friendships/list.json 100.00
```
