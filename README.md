# http.machine.codes


```
curl http.machine.codes/status/200
```



```
curl -s 'http://webconcepts.info/concepts.json' | jq '.[8].values[] | {code: .value, phrase: .description, description: .details[0].description, spec: .details[0]."spec-name", spec_href: .details[0].documentation}' | jq -s '.' > status-codes.json
```


/status/200     terminal with ANSI
/status/200.txt plain text
/status/200.md
/status/200.json
/status/200.htm


## Deploying

### Prerequisites

* php cli
```bash
gem install s3_website
```

### Building

```bash
./_tools/generate.php
```

### Uploading

```bash
s3_website push
```

