#!/usr/bin/env python
# -*- coding:utf-8 -*-
# 百度百科Python词条及相关词条 标题和简介
# https://baike.baidu.com/item/Python/407313

import url_manager,html_downloader,html_parser,html_outputer
import traceback

class SpiderMain(object):
    def __init__(self):
        self.urls = url_manager.UrlManager()
        self.downloader = html_downloader.HtmlDownloader()
        self.parser = html_parser.HtmlParser()
        self.outputer = html_outputer.HtmlOutputer()
        
    def crawl(self,root_url):
        count = 1
        self.urls.add_new_url(root_url)
        while self.urls.has_new_url():
            try:
                new_url = self.urls.get_new_url()
                print 'crawl %d : %s' % (count, new_url)
                html_cont = self.downloader.download(new_url)
                new_urls, new_data = self.parser.parser(new_url,html_cont)
                self.urls.add_new_urls(new_urls)
                self.outputer.collect_data(new_data)

                if(count == 100):
                    break

                count = count+1
            except Exception, e:
                print 'crawler failed'
                print 'str(Exception):\t', str(Exception)
                print 'str(e):\t\t', str(e)
                print 'repr(e):\t', repr(e)
                print 'e.message:\t', e.message
                print 'traceback.print_exc():'; traceback.print_exc()
                print 'traceback.format_exc():\n%s' % traceback.format_exc()

        self.outputer.output_html()

if __name__ == "__main__":
    root_url = "https://baike.baidu.com/item/Python/407313"
    obj_spider = SpiderMain()
    obj_spider.crawl(root_url)