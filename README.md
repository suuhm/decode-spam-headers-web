# decode-spam-headers-web
Easy webinterface for SOC teams  decode-spam-headers by mgeeky:
https://github.com/mgeeky/decode-spam-headers


# Features
- Smart analyzing of copied text or uploading of text, eml, msg files
- Advanced use of all 106 functions via checkbox
- Decoding as extern HTML output or directly on site


# Install 
## (for example here the OpenLightSpeed webserver)
> [!NOTE]
>  alternatively, you can also use any other web server.
> A version of php is required here!

```bash
# Installing 
wget https://openlitespeed.org/packages/openlitespeed-1.7.16.tgz
tar -zxvf openlitespeed-*.tgz && cd openlitespeed
./install.sh
# Start Server
systemctl start lsws.service 
```

## Installing the webinterface
```bash
ln -s /usr/local/lsws/ /var/www
# Change to your wished WebRoot
cd /var/www/
git clone https://github.com/suuhm/decode-spam-headers-web
cd decode-spam-headers-web && mkdir run
```

## Installing decode-spam-headers
```bash
apt install python3 python-pip3 git
git clone https://github.com/mgeeky/decode-spam-headers
cd decode-spam-headers
pip3 install -r requirements.txt
cp -ra *.py ../run/
```

# Open the webinterface and text your spam with the blue team!

![grafik](https://github.com/suuhm/decode-spam-headers-web/assets/11504990/d3e77629-7c0d-4d95-b989-69188fe097cd)

# Issues

For bugreport write an issue!

