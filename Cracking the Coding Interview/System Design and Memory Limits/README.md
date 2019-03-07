## Chapter 12: System Design and Memory Limits

1. If you were integrating a feed of end of day stock price information (open, high, low,and closing price) for 5,000 companies, how would you do it? You are responsible for the development, rollout and ongoing monitoring and maintenance of the feed. Describe the different methods you considered and why you would recommend your approach. The feed is delivered once per trading day in a comma-separated format via an FTP site. The feed will be used by 1000 daily users in a web application.

2. How would you design the data structures for a very large social network (Facebook,LinkedIn, etc)? Describe how you would design an algorithm to show the connection, or path, between two people (e.g., `Me -> Bob -> Susan -> Jason -> You`).

3. Given an input file with four billion integers, provide an algorithm to generate an integer which is not contained in the file. Assume you have 1 GB of memory. 
`FOLLOW UP` 
What if you have only 10 MB of memory?

4. You have an array with all the numbers from 1 to N, where N is at most 32,000. The array may have duplicate entries and you do not know what N is. With only 4KB of memory available, how would you print all duplicate elements in the array?

5. If you were designing a web crawler, how would you avoid getting into infinite loops?

6. You have a billion urls, where each is a huge page. How do you detect the duplicate documents?

7. You have to design a database that can store terabytes of data. It should support efficient range queries. How would you do it?