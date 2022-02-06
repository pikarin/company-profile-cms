import { AxiosInstance } from 'axios'
import { LoDashStatic } from 'lodash'
import { Config, Router, QueryParams } from 'ziggy-js'

declare global {
    interface Window {
        _: LoDashStatic
        axios: AxiosInstance
    }

    declare function route(): Router
    declare function route(name: string, params?: QueryParams, absolute?: boolean, customZiggy?: Config): string
}
