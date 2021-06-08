# college-magazine-next

### How to Deploy on cleavr? (This is for external testing purpose only)

- Create database `cmagazine_db` with user `cmagazine_user`, and password `password` OR update `/connection/connection.php` with your credentials.
- Deploy the app so we can retrive mysql dump file. NOTE: It wont work at this step.
- SSH into the server. Run ssh root@serverIp
- Run `mysql -u cmagazine_user -p cmagazine_db < /home/cleavr/bqfzjwcyco1802.cleaver.rocks/current/id6510059_college.sql`
